var fs = require('fs');
var screenshot = require('node-webkit-screenshot');
var path = require('path');

 fs.readdir(path.join('..','repos'), function (err, list) {
 	list.forEach(function(repo, i) {
 		console.log(i);
		screenshot({
		  url : 'http://collabkings.com/repos/' + repo,
		  width : 600,
		  height : 400
		})
		.then(function(buffer){
		  fs.writeFile(path.join('..', 'img', 'repos', repo + '.png'), buffer, function(){
		    // This will close the screenshot service 
		    if(i === list.length - 1)
			    screenshot.close();
		  });
		});
 	});
 });