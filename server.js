var express = require('express');
var morgan = require('morgan');
var path = require('path');

var app = express();
app.use(morgan('combined'));

app.use(express.static('public'));
app.use('/ui',express.static(__dirname+'/ui'));


app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'index.html'));
});


app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'TA.html'));
});


app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'BE.html'));
});


app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'HI.html'));
});


app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'MA.html'));
});

app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'TE.html'));
});


app.get('/', function (req, res) {
  res.sendFile(path.join(__dirname, 'ui', 'UR.html'));
});


app.use("/css", express.static(__dirname+'/ui/css'));
app.use("/img", express.static(__dirname+'/ui/img'));
app.use("/js", express.static(__dirname+'/ui/js'));
app.use("/fonts", express.static(__dirname+'/ui/fonts'));
app.use("/scss", express.static(__dirname+'/ui/scss'));
app.use("/less", express.static(__dirname+'/ui/less'));
app.use("/request", express.static(__dirname+'/ui/request'));
app.use("/partials", express.static(__dirname+'/ui/partials'));





var port = 8080; // Use 8080 for local development because you might already have apache running on 80
app.listen(8080, function () {
  console.log(`IMAD course app listening on port ${port}!`);
});
