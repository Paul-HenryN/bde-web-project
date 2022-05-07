// Import the pool created in the connection file
const pool = require('../database/connection');

// Export the methods which will be used in the category controller
module.exports = {
	// Define a prepared statement for creating a category
  create : (data, callBack) => {
    pool.query (
      " INSERT INTO categories (name, id_articles) VALUES (?, ?)",
      [
				data.name,
				data.id_article
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
	
	// Define a prepared statement for getting a category by its id
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

	// Define a prepared statement for getting categories by user location
	getCategoriesByLocation : (location, callBack) => {
		pool.query(
			"SELECT categories.id, categories.name FROM (categories INNER JOIN orders ON categories.id_articles = orders.id) INNER JOIN users ON orders.id_user = users.id WHERE users.location = ? ORDER BY categories.id ASC",
			[location],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results);
			}
		);
	},

	// Define a prepared statement for updating categories information
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

	// Define a prepared statement for deleting a category by its id
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