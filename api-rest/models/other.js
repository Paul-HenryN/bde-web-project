// Import the pool created in the connection file
const pool = require('../database/connection');

// Export the methods which will be used in the config controller
module.exports = {
	// Define a prepared statement for creating an external person account
	create : (data, callBack) => {
    pool.query (
      " INSERT INTO others (email, password) VALUES (?, ?)",
      [
				data.email,
				data.password
			],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				else {
					return callBack(null, results);
				}
			}
    );
  },

	// Define a prepared statement for getting an external person email
  getOtherByEmail : (email, callBack) => {
		pool.query(
			"SELECT * FROM others WHERE email = ?",
			[email],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results[0]);
			}
		);
	},
};