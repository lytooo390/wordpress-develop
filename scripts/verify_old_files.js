var fs = require('fs');
var path = require('path');

var directory = '/workspaces/wordpress-develop';
var daysThreshold = 30; // Files not modified in the last 30 days are considered old

function getOldFiles(dir, thresholdDays) {
    var oldFiles = [];
    var now = Date.now();
    var threshold = thresholdDays * 24 * 60 * 60 * 1000;

    function scanDirectory(currentDir) {
        var files = fs.readdirSync(currentDir);
        files.forEach(function(file) {
            var filePath = path.join(currentDir, file);
            var stats = fs.statSync(filePath);

            if (stats.isDirectory()) {
                scanDirectory(filePath);
            } else {
                var lastModified = new Date(stats.mtime).getTime();
                if (now - lastModified > threshold) {
                    oldFiles.push(filePath);
                }
            }
        });
    }

    scanDirectory(dir);
    return oldFiles;
}

var oldFiles = getOldFiles(directory, daysThreshold);
if (oldFiles.length > 0) {
console.log('Files not modified in the last ' + daysThreshold + ' days:');
    oldFiles.forEach(function(file) {
        console.log(file);
    });
} else {
    console.log('No files older than ' + daysThreshold + ' days found.');
}
