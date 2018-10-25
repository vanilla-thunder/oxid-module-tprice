/*jslint node:true, curly:false */
"use strict";
var oxmodule = require('./package.json'),
    fs = require('fs-extra'),
    replace = require('replace'),
    runner = require('child_process'),
    mode = process.argv[2],
    gitcb = function (err, stdout, stderr) {
        if (err) console.log(err);
        else if (stderr) console.log(stderr);
        else console.log("ok");
    };

if (typeof mode === "undefined") process.exit(-1);
else if (mode === "init") {
    runner.execSync("git clone -b master " + oxmodule.repository.url.replace("https://github.com/", "git@github.com:") + " _master --depth 1");
    runner.execSync("git clone -b module " + oxmodule.repository.url.replace("https://github.com/", "git@github.com:") + " _module --depth 1");
    runner.execSync("npm install --production");
    console.log("done!");
    console.log("");
}
else if (mode === "build") {

    // cleanup
    console.log("removing old files...");
    fs.moveSync('_module', '__module');
    fs.mkdirSync('_module');
    fs.moveSync('__module/.git', '_module/.git');
    fs.removeSync('__module');
    fs.emptyDirSync('_master/copy_this/modules/');


    // copy new files
    console.log("copying new files...");
    try {
        fs.copySync('application', '_module/application');
        fs.copySync('LICENSE', '_module/LICENSE');
        fs.copySync('metadata.php', '_module/metadata.php');
        fs.copySync('README.md', '_module/README.md');
    } catch (err) {
        console.log("FAILED: ", err);
    }

    // compile some files
    console.log("magic in progress...");
    var replaces = {
        'empalte': 'emplate',
        'NAME': oxmodule.name,
        'DESCRIPTION': oxmodule.description,
        'VERSION': oxmodule.version + ' ( ' + new Date().toISOString().split('T')[0] + ' )',
        'AUTHOR': oxmodule.author,
        'VENDOR': oxmodule.vendor,
        'COMPANY': oxmodule.company,
        'EMAIL': oxmodule.email,
        'URL': oxmodule.url,
        'YEAR': new Date().getFullYear()
    };
    for (var x in replaces) {
        if (!replaces.hasOwnProperty(x)) continue;
        replace({
            regex: "___" + x + "___",
            replacement: replaces[x],
            paths: ['./_module'],
            recursive: true,
            async: false,
            silent: true
        });
    }

    console.log("preparing master branch...");
    try {
        fs.mkdirsSync('_master/copy_this/modules/' + oxmodule.vendor);
        fs.closeSync(fs.openSync('_master/copy_this/modules/' + oxmodule.vendor + '/vendormetadata.php', 'w'));
        fs.copySync('_module', '_master/copy_this/modules/' + oxmodule.vendor + '/' + oxmodule.name);
        fs.removeSync('_master/copy_this/modules/' + oxmodule.vendor + '/' + oxmodule.name + '/.git');
        fs.copySync('_module/README.md', '_master/README.md');
        fs.copySync('LICENSE', '_master/LICENSE');
        console.log("done!");
        console.log("");
    } catch (err) {
        console.log("FAILED: ", err);
    }
}
else if (mode === "publish") {
    var msg = ( process.argv[3] ? process.argv[3] : "updates");

    runner.execSync("git add . && git commit -m '" + msg + "' && git push", {cwd: './_master/'});
    runner.execSync("git add . && git commit -m '" + msg + "' && git push", {cwd: './_module/'});
    console.log("done!");
    console.log("");
}