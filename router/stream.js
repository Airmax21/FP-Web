const router = require("express").Router();
const con = require("./db");

router.get('/stream',async(req,res)=>{
    const stream = await con.query(`SELECT * FROM video WHERE id=${req.query.id}`),
    upnext = await con.query(`SELECT * FROM video WHERE id!=${req.query.id}`),
    genre = await con.query(`SELECT DISTINCT genre FROM genre`),
    search = await con.query(`SELECT name FROM video`);
    var watch = stream[0][0].watch + 1;
    watch = await con.query(`UPDATE video SET watch=${watch} WHERE id=${req.query.id}`);
    if(typeof req.cookies.username !== 'undefined'){
        const users = await con.query(`SELECT * FROM users WHERE username='${req.cookies.username}'`);
        var recent = await con.query(`SELECT * FROM recent WHERE movieID=${req.query.id} AND users=${users[0][0].id}`);
        if(recent[0].length > 0){
            var updaterecent = await con.query(`UPDATE recent SET lastTime=now() WHERE movieID=${req.query.id} AND users=${users[0][0].id}`);
        }else{
            var updaterecent = await con.query(`INSERT INTO recent(users,movieID) values (${users[0][0].id},${req.query.id})`);
        }
        res.render('stream',{
           username : req.cookies.username,
           foto : users[0][0].foto,
           search : search[0],
           genre : genre[0],
           stream : stream[0][0],
           upnext : upnext[0]
        })
    }
    else{
        res.render('stream',{
            search : search[0],
            genre : genre[0],
            stream : stream[0],
            upnext : upnext[0]
         })
    }
})

module.exports = router;