const mysql = require('mysql');
const query = (quer) => {   
    var con = mysql.createPool({
        host: "localhost",
        user : "root",
        password : "",
        database : "dbfp",
        connectionLimit: 10
    })
    con.getConnection((err,connect)=>{
        con.query(quer,(err,result)=>{
            const hasil = result;
        })
        connect.release();
        return hasil;
    })
}


exports.query = query;