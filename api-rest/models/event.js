const pool = require('../database/connection');

module.exports = {
  create : (data, callBack) => {
    pool.query (
      " INSERT INTO events (name, description, image_url, date, price, is_repeating) VALUES (?, ?, ?, ?, ?, ?)",
      [
        data.name,
				data.description,
				data.image_url,
				data.date,
				data.price,
				data.is_repeating
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
	
	getEventsById : (id, callBack) => {
		pool.query(
			"SELECT * FROM events WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results[0]);
			}
		);
	},

	UpdateEvent : (id, data, callBack) => {
		pool.query(
			"UPDATE events set name=?, description=?, image_url=?, date=?, price=?, is_repeating=? WHERE id = ?",
			[
				data.name,
				data.description,
				data.image_url,
				data.date,
				data.price,
				data.is_repeating,
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

	DeleteEvent : (id, callBack) => {
		pool.query(
			"DELETE FROM events WHERE id = ?",
			[id],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results);
			}
		);
	},
};