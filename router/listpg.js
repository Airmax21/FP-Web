const router = require("express").Router();
const con = require("./db");

router.get('/genre',async(req,res,next)=>{
    const list = await con.query(`SELECT * FROM video WHERE id IN (SELECT movieID FROM genre WHERE genre='${req.query.genre}')`),
    genre = await con.query(`SELECT DISTINCT genre FROM genre`),
    search = await con.query(`SELECT name FROM video`);
    if(typeof req.cookies.username !== 'undefined'){
        const users = await con.query(`SELECT * FROM users WHERE username='${req.cookies.username}'`);
        res.render('list',{
            username : req.cookies.username,
            foto : users[0][0].foto,
            list : list[0],
            judul : req.query.genre,
            search : search[0],
            genre : genre[0]
        })
    }
    else{
        res.render('list',{
            list : list[0],
            judul : req.query.genre,
            search : search[0],
            genre : genre[0]
        })
    }
})

router.get('/search',async(req,res,next)=>{
    const list = await con.query(`SELECT * FROM video WHERE name LIKE '%${req.query.search}%'`),
    genre = await con.query(`SELECT DISTINCT genre FROM genre`),
    search = await con.query(`SELECT name FROM video`);
    if(typeof req.cookies.username !== 'undefined'){
        const users = await con.query(`SELECT * FROM users WHERE username='${req.cookies.username}'`);
        res.render('list',{
            username : req.cookies.username,
            foto : users[0][0].foto,
            list : list[0],
            judul : 'Hasil Pencarian dari `'+req.query.search+'`',
            search : search[0],
            genre : genre[0]
        })
    }
    else{
        res.render('list',{
            list : list[0],
            judul : 'Hasil Pencarian dari `'+req.query.search+'`',
            search : search[0],
            genre : genre[0]
        })
    }
})
router.get('/trending',async(req,res,next)=>{
    const list = await con.query(`SELECT * FROM video ORDER BY watch DESC`),
    genre = await con.query(`SELECT DISTINCT genre FROM genre`),
    search = await con.query(`SELECT name FROM video`);
    if(typeof req.cookies.username !== 'undefined'){
        const users = await con.query(`SELECT * FROM users WHERE username='${req.cookies.username}'`);
        res.render('list',{
            username : req.cookies.username,
            foto : users[0][0].foto,
            list : list[0],
            judul : 'trending',
            search : search[0],
            genre : genre[0]
        })
    }
    else{
        res.render('list',{
            list : list[0],
            judul : 'trending',
            search : search[0],
            genre : genre[0]
        })
    }
})
router.get('/new',async(req,res,next)=>{
    const list = await con.query(`SELECT * FROM video ORDER BY upload DESC`),
    genre = await con.query(`SELECT DISTINCT genre FROM genre`),
    search = await con.query(`SELECT name FROM video`);
    if(typeof req.cookies.username !== 'undefined'){
        const users = await con.query(`SELECT * FROM users WHERE username='${req.cookies.username}'`);
        res.render('list',{
            username : req.cookies.username,
            foto : users[0][0].foto,
            list : list[0],
            judul : 'new releases',
            search : search[0],
            genre : genre[0]
        })
    }
    else{
        res.render('list',{
            list : list[0],
            judul : 'new releases',
            search : search[0],
            genre : genre[0]
        })
    }
})

router.get('/recent',async(req,res,next)=>{
    if(typeof req.cookies.username !== 'undefined'){
        const users = await con.query(`SELECT * FROM users WHERE username='${req.cookies.username}'`);
        const list = await con.query(`SELECT v.* FROM video as v INNER JOIN recent AS r ON v.id = r.movieID WHERE r.users=${users[0][0].id} ORDER BY r.lastTime DESC`),
        genre = await con.query(`SELECT DISTINCT genre FROM genre`),
        search = await con.query(`SELECT name FROM video`);
        res.render('list',{
            username : req.cookies.username,
            foto : users[0][0].foto,
            list : list[0],
            judul : 'recent',
            search : search[0],
            genre : genre[0]
        })
    }
    else{
        res.render('!login');
    }
})
module.exports  = router;