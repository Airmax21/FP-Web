var express = require('express'),
    app = express(),
    path = require('path'),
    cookieParser = require('cookie-parser'),
    session = require('express-session'),
    cookie = require('cookie-parser')
    bodyParser = require('body-parser');
const home = require("./router/home"),
login = require("./router/loginpg"),
register = require("./router/regpg");
list = require("./router/listpg");
stream = require("./router/stream");

app.use(express.static(path.join(__dirname,'/assets')));
app.use('/assets',express.static(path.join(__dirname,'assets')));

app.use(express.static(path.join(__dirname,'/admin')));
app.use('/admin',express.static(path.join(__dirname,'admin')));

app.use(express.static(path.join(__dirname,'/controller')));
app.use('/controller',express.static(path.join(__dirname,'controller')));

app.use(express.static(path.join(__dirname,'/router')));
app.use('/router',express.static(path.join(__dirname,'router')));

app.use(bodyParser.urlencoded({ extended: true }));
app.use(cookie());
// set view engine to php-express
app.set('views', './views');
app.set('view engine', 'ejs');
app.use(home);
app.use(login);
app.use(register);
app.use(list);
app.use(stream);

app.use(cookieParser());
app.use(
  session({
    saveUninitialized: false,
    name: 'noelle',
    secret: 'noelle cantik',
    resave: false
  })
)

var server = app.listen(80, function () {
  console.log("Server sudah berjalan");
});
