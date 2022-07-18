const router = require("express").Router();
const con = require("./db");

router.get('/loginpg',async(req,res,next)=>{
    const genre = await con.query(`SELECT DISTINCT genre FROM genre`),
    search = await con.query(`SELECT name FROM video`);
    if(typeof req.cookies.username !== 'undefined'){
        res.redirect('/')
    }
    else{      
        res.render('loginpg',{
            genre : genre[0],
            search : search[0]
        })
    }
})
router.post('/login',async(req,res,next)=>{
    const genre = await con.query(`SELECT DISTINCT genre FROM genre`),
    search = await con.query(`SELECT name FROM video`);
    var akun = await con.query(`SELECT * FROM users WHERE (username='${req.body.email}' OR email='${req.body.email}') AND pw=MD5(SHA1(AES_ENCRYPT('${req.body.pass}','R0xO')))`);
    var admin = await con.query(`SELECT * FROM theadmin WHERE username='${req.body.email}' AND pw=MD5(SHA1(AES_ENCRYPT('${req.body.pass}','R0xO')))`);
    if(akun[0].length >0){
        res.cookie('username',`${akun[0][0].username}`).redirect('/');
    }
    else if(admin[0].length>0){
        res.cookie('username','admin').redirect('/admin');
    }
    else{
        res.render('loginpg',{
            genre : genre[0],
            output : 'Username atau password salah yang',
            search : search[0]
        })
    }
})
router.get('/logout',(req,res,next)=>{
    res.clearCookie('username').redirect('/');
})
module.exports = router;