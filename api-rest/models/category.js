const pool = require('../database/connection');

module.exports = {
  create : (data, callBack) => {
    pool.query (
      " INSERT INTO categories (name) VALUES (?)",
      [data.name],
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
	
	getCategoriesById : (id, callBack) => {
		pool.query(
			"SELECT * FROM categories WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results[0]);
			}
		);
	},

	// getCategoriesByLocation : (location, callBack) => {
	// 	pool.query(
	// 		"SELECT * FROM categories WHERE location = ?",
	// 		[location],
	// 		(error, results, fields) => {
	// 			if (error) {
	// 				return callBack(error);
	// 			}
	// 			return callBack(null, results);
	// 		}
	// 	);
	// },

	UpdateCategory : (id, data, callBack) => {
		pool.query(
			"UPDATE categories set name=? WHERE id = ?",
			[
				data.name,
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

	DeleteCategory : (id, callBack) => {
		pool.query(
			"DELETE FROM categories WHERE id = ?",
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