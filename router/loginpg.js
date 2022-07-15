const router = require("express").Router();
const con = require("./db");

router.get('/loginpg',async(req,res,next)=>{
    const genre = await con.query(`SELECT DISTINCT genre FROM genre`);
    if(typeof req.cookies.username !== 'undefined'){
        res.redirect('/')
    }
    else{      
        res.render('nav',{
            genre : genre[0]
        })
    }
})
module.exports = router;