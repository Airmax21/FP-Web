const router = require("express").Router();
const con = require("./db");

router.get('/',(req,res,next)=>{
    res.cookie('username','asu');
    var trendings, newr,romance,adventure,slice,comedy;
    con.query(`SELECT * FROM video ORDER BY watch DESC`,(err,result)=>{
        trendings = result;
    });
    con.query(`SELECT * FROM video ORDER BY upload DESC`,(err,result)=>{
        newr = result;
    });
    con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='romance')`,(err,result)=>{
        romance = result;
    });
    con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='adventure')`,(err,result)=>{
        adventure = result;
    });
    con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='sliceoflife')`,(err,result)=>{
        slice = result;
    });
    con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='comedy')`,(err,result)=>{
        comedy = result;
    });
     if(typeof req.cookies !== 'undefined'){
         con.query(`SELECT * FROM users WHERE username='${req.cookies.username}'`,(err,result)=>{
            res.render('nav',{
                username : req.cookies.username,
                foto : result[0].foto,
                trending : trendings,
                newr : newr,
                romance : romance,
                adventure : adventure,
                slice : slice,
                comedy : comedy
            })
            
         })
     }
    
});
module.exports = router;