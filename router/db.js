const mysql = require('mysql2/promise')
async function query(sql) {
    const connection = await mysql.createPool({
        host: "localhost",
        user : "root",
        password : "",
        database : "dbfp",
        connectionLimit: 10
    });
    const results = await connection.execute(sql);
    await connection.end();
    return results;
}

module.exports = { query };