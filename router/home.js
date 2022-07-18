const router = require("express").Router();
const con = require("./db");

router.get('/home',async(req,res,next)=>{
    const trendings = await con.query(`SELECT * FROM video ORDER BY watch DESC`),
    newr = await con.query(`SELECT * FROM video ORDER BY upload DESC`),
    romance = await con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='romance')`),
    adventure = await con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='adventure')`),
    slice = await con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='sliceoflife')`),
    comedy = await con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='comedy')`),
    search = await con.query(`SELECT name FROM video`),
    genre = await con.query(`SELECT DISTINCT genre FROM genre`);
     if(typeof req.cookies.username !== 'undefined'){
        const users = await con.query(`SELECT * FROM users WHERE username='${req.cookies.username}'`);
        var recent = await con.query(`SELECT v.* FROM video as v INNER JOIN recent AS r ON v.id = r.movieID WHERE r.users=${users[0][0].id} ORDER BY r.lastTime DESC`);
         res.render('home',{
            username : req.cookies.username,
            foto : users[0][0].foto,
            trending : trendings[0],
            newr : newr[0],
            romance : romance[0],
            adventure : adventure[0],
            slice : slice[0],
            comedy : comedy[0],
            search : search[0],
            genre : genre[0],
            recent : recent[0]
        })
     }
     else{
        res.render('home',{
            trending : trendings[0],
            newr : newr[0],
            romance : romance[0],
            adventure : adventure[0],
            slice : slice[0],
            comedy : comedy[0],
            search : search[0],
            genre : genre[0]
        })
     }
});
router.get('/',async(req,res,next)=>{
   const trendings = await con.query(`SELECT * FROM video ORDER BY watch DESC`),
   newr = await con.query(`SELECT * FROM video ORDER BY upload DESC`),
   romance = await con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='romance')`),
   adventure = await con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='adventure')`),
   slice = await con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='sliceoflife')`),
   comedy = await con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='comedy')`),
   search = await con.query(`SELECT name FROM video`),
   genre = await con.query(`SELECT DISTINCT genre FROM genre`);
    if(typeof req.cookies.username !== 'undefined'){
       const users = await con.query(`SELECT * FROM users WHERE username='${req.cookies.username}'`);
       var recent = await con.query(`SELECT v.* FROM video as v INNER JOIN recent AS r ON v.id = r.movieID WHERE r.users=${users[0][0].id} ORDER BY r.lastTime DESC`);
        res.render('home',{
           username : req.cookies.username,
           foto : users[0][0].foto,
           trending : trendings[0],
           newr : newr[0],
           romance : romance[0],
           adventure : adventure[0],
           slice : slice[0],
           comedy : comedy[0],
           search : search[0],
           genre : genre[0],
           recent : recent[0]
       })
    }
    else{
       res.render('home',{
           trending : trendings[0],
           newr : newr[0],
           romance : romance[0],
           adventure : adventure[0],
           slice : slice[0],
           comedy : comedy[0],
           search : search[0],
           genre : genre[0]
       })
    }
});
router.get('/about',async(req,res,next)=>{
   const search = await con.query(`SELECT name FROM video`),
   genre = await con.query(`SELECT DISTINCT genre FROM genre`);
    if(typeof req.cookies.username !== 'undefined'){
       const users = await con.query(`SELECT * FROM users WHERE username='${req.cookies.username}'`);
        res.render('about',{
           username : req.cookies.username,
           foto : users[0][0].foto,
           search : search[0],
           genre : genre[0]
       })
    }
    else{
       res.render('about',{
           search : search[0],
           genre : genre[0]
       })
    }
});
module.exports = router;