var connect = require("connect");
var nowjs = require("now");
var io = require("socket.io");


var app = connect.createServer(
  connect.static(__dirname + '/public')
);

app.listen(8180);

var connect = require('connect');
var serveStatic = require('serve-static'); 
var app = connect(); 

app.use(serveStatic('../angularjs')); 

app.listen(5000);