const router = require("express").Router();
const con1 = require("./db");
router.get('/',(req,res,next)=>{
    var result = con1.query('SELECT * FROM video');
    console.log(result);
})
module.exports = router;