const pool = require('../database/connection');

module.exports = {
  create : (data, callBack) => {
    pool.query (
      " INSERT INTO articles (name, description, image_url, price) VALUES (?, ?, ?, ?)",
      [
        data.name,
				data.description,
				data.image_url,
				data.price
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

	// getArticlesByLocation : (location, callBack) => {
	// 	pool.query(
	// 		"SELECT * FROM articles WHERE location = ?",
	// 		[location],
	// 		(error, results, fields) => {
	// 			if (error) {
	// 				return callBack(error);
	// 			}
	// 			return callBack(null, results);
	// 		}
	// 	);
	// },

	UpdateArticle : (id, data, callBack) => {
		pool.query(
			"UPDATE articles set name=?, description=?, image_url=?, price=? WHERE id = ?",
			[
				data.name,
				data.description,
				data.image_url,
				data.price,
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