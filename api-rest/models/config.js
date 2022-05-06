const pool = require('../database/connection');

module.exports = {
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