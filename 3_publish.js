var runner = require('child_process');

runner.exec("git add . && git commit -m 'updates' && git push", {cwd: './_master/'},
    function (err, stdout, stderr) {
        if(err) console.log(err);
        else if(stderr) console.log(stderr);
        else console.log("master branch updated");
    }
);
runner.exec("git add . && git commit -m 'updates' && git push", {cwd: './_module/'},
    function (err, stdout, stderr) {
        if(err) console.log(err);
        else if(stderr) console.log(stderr);
        else console.log("module branch updated");
    }
);

process.on('exit', function (code) {
    console.log('publishing finished');
});