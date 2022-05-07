// Import the mysql module as a constant
const { createPool } = require('mysql');

// Create a connection pool with connection limit of 10 hosts
const pool = createPool({
  port : process.env.DB_PORT,
  host : process.env.DB_HOST,
  user : process.env.DB_USER,
  password : process.env.DB_PASSWORD,
  database : process.env.DB_NAME,
  connectionLimit : 10
});

// Export the created pool to use it everywhere
module.exports = pool;