const router = require("express").Router();
const con = require("./db");

router.get('/regpg',async(req,res,next)=>{
    const genre = await con.query(`SELECT DISTINCT genre FROM genre`),
    search = await con.query(`SELECT name FROM video`);
    if(typeof req.cookies.username !== 'undefined'){
        res.redirect('/')
    }
    else{      
        res.render('nav',{
            genre : genre[0],
            search : search[0]
        })
    }
})
router.get('/term',(req,res)=>{
    res.render('term');
})
router.post('/register',async(req,res,next)=>{
    const genre = await con.query(`SELECT DISTINCT genre FROM genre`),
    search = await con.query(`SELECT name FROM video`);
    var akun = await con.query(`SELECT * FROM users WHERE username='${req.body.username}' OR email='${req.body.email}'`);
    if(akun[0].length >0){
        res.render('nav',{
            genre : genre[0],
            search : search[0],
            output : 'Akun sudah terdaftar'
        })
    }
    else{
    var akun = await con.query(`INSERT INTO users(pw,email,username) VALUES(MD5(SHA1(AES_ENCRYPT('${req.body.pass}','R0xO'))),'${req.body.email}','${req.body.username}')`);    
    res.render('nav',{
        genre : genre[0],
        search : search[0],
        output : 'Berhasil terdaftar'
    })
    }
})
module.exports = router;