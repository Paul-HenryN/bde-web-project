// Import the pool created in the connection file
const pool = require('../database/connection');

// Export the methods which will be used in the article controller
module.exports = {
	// Define a prepared statement for creating an article
  create : (data, callBack) => {
    pool.query (
      " INSERT INTO articles (name, description, image_url, price, category_id) VALUES (?, ?, ?, ?, ?)",
      [
        data.name,
				data.description,
				data.image_url,
				data.price,
				data.category_id
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
	
	// Define a prepared statement for getting an article by its id
	getArticlesById : (id, callBack) => {
		pool.query(
			"SELECT * FROM articles WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results[0]);
			}
		);
	},

	// Define a prepared statement for updating an article by user location
	getArticlesByLocation : (location, callBack) => {
		pool.query(
			"SELECT articles.id, articles.name, articles.description, articles.image_url, articles.price FROM (articles INNER JOIN orders ON articles.id = orders.article_id) INNER JOIN users ON orders.user_id = users.id WHERE users.location = ? ORDER BY articles.id",
			[location],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results);
			}
		);
	},

	// Define a prepared statement for updating an article by its id
	UpdateArticle : (id, data, callBack) => {
		pool.query(
			"UPDATE articles set name=?, description=?, image_url=?, price=?, category_id=? WHERE id = ?",
			[
				data.name,
				data.description,
				data.image_url,
				data.price,
				data.category_id,
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

	// Define a prepared statement for deleting an article by its id
	DeleteArticle : (id, callBack) => {
		pool.query(
			"DELETE FROM articles WHERE id = ?",
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