const pool = require('../database/connection');

module.exports = {
  create : (data, callBack) => {
    pool.query (
      " INSERT INTO users (name, surname, email, location, password, avatar_url) VALUES (?, ?, ?, ?, ?, ?)",
      [
        data.name,
				data.surname,
				data.email,
				data.location,
				data.password,
				data.avatar_url
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
	
	getUsersById : (id, callBack) => {
		pool.query(
			"SELECT * FROM users WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results[0]);
			}
		);
	},

	getUsersByLocation : (location, callBack) => {
		pool.query(
			"SELECT * FROM users WHERE location = ?",
			[location],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results);
			}
		);
	},

	UpdateUser : (id, data, callBack) => {
		pool.query(
			"UPDATE users set name=?, surname=?, email=?, location=?, password=?, avatar_url=? WHERE id = ?",
			[
				data.name,
				data.surname,
				data.email,
				data.location,
				data.password,
				data.avatar_url,
				id
			],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results);
			}
		);
	},

	DeleteUser : (id, callBack) => {
		pool.query(
			"DELETE FROM users WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results);
			}
		);
	}
};