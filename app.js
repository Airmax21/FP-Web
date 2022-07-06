var express = require('express');
var app = express();
var path = require('path');

// must specify options hash even if no options provided!
var phpExpress = require('php-express')({

  // assumes php is in your PATH
  binPath: 'php'
});

app.use(express.static(path.join(__dirname,'/assets')));
app.use('/assets',express.static(path.join(__dirname,'/assets')));

// set view engine to php-express
app.set('views', './');
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');

app.get('/',(req,res)=>{
  res.redirect('home.php');
})
// routing all .php file to php-express
app.all(/.+\.php$/, phpExpress.router);

var server = app.listen(3000, function () {
  var port = server.address().port;
  console.log('PHPExpress app listening at localhost:', port);
});