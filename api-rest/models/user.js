// Import the pool created in the connection file
const pool = require('../database/connection');

// Export the methods which will be used in the user controller
module.exports = {
	// Define a prepared statement for creating a user
  create : (data, callBack) => {
    pool.query (
      " INSERT INTO users (name, surname, email, location, password, avatar_url, id_events) VALUES (?, ?, ?, ?, ?, ?, ?)",
      [
        data.name,
				data.surname,
				data.email,
				data.location,
				data.password,
				data.avatar_url,
				data.id_event
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
	
	// Define a prepared statement for getting a user by his id
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

	// Define a prepared statement for getting a user by his location
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

	// Define a prepared statement for updating a user
	UpdateUser : (id, data, callBack) => {
		pool.query(
			"UPDATE users set name=?, surname=?, email=?, location=?, password=?, avatar_url=?, id_events=? WHERE id = ?",
			[
				data.name,
				data.surname,
				data.email,
				data.location,
				data.password,
				data.avatar_url,
				data.id_event,
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

	// Define a prepared statement for deleting a user
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