const router = require("express").Router();
const con = require("./db");

router.get('/admin',async(req,res,next)=>{
    if(req.cookies.username !== 'admin')res.redirect('/');
    users = con.query('')

})