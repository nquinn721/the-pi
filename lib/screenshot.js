var fs = require('fs');
var screenshot = require('node-webkit-screenshot');
var path = require('path');
 
 console.log(path.join(process.cwd(), 'img', 'out.png'));
// screenshot({
//   url : 'http://collabkings.com/repos/BRiley/',
//   width : 1024,
//   height : 768
// })
// .then(function(buffer){
//   fs.writeFile(process.cwd() + '/img/out.png', buffer, function(){
//     // This will close the screenshot service 
//     screenshot.close();
//   });
// });