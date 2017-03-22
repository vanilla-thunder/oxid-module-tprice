var runner = require('child_process'),
    p = require('./package.json');

r.exec("git clone " + p.repository.url.replace('https://','git@') + ".git _master --depth 1",
    function (err, stdout, stderr) {
        if(err) console.log(err);
        else if(stderr) console.log(stderr);
        else console.log("master ok");
    }
);
runner.exec("git clone -b module " + p.repository.url.replace('https://','git@') + ".git _module --depth 1",
    function (err, stdout, stderr) {
        if(err) console.log(err);
        else if(stderr) console.log(stderr);
        else console.log("module ok");
    }
);
runner.exec("npm install --production",
    function (err, stdout, stderr) {
        if(err) console.log('err: '+err);
        else if(stderr) console.log('stderr: '+stderr);
        else console.log("npm packages installed");
    }
);

process.on('exit', function (code) {
    console.log('initializing finished');
});