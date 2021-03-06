// Import the pool created in the connection file
const pool = require('../database/connection');

// Export the methods which will be used in the event controller
module.exports = {
	// Define a prepared statement for creating an event
  create : (data, callBack) => {
    pool.query (
      " INSERT INTO events (name, description, image_url, date, price, is_repeating, is_published, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)",
      [
        data.name,
				data.description,
				data.image_url,
				data.date,
				data.price,
				data.is_repeating,
				0,
				data.user_id,
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
	
	// Define a prepared statement for getting an event by its id
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

	// Define a prepared statement for getting an event by user location
	getEventsByLocation : (location, callBack) => {
		pool.query(
			"SELECT events.id, events.name, events.description, events.image_url, events.date, events.price, events.is_repeating, events.is_published FROM users INNER JOIN events ON events.user_id = users.id WHERE users.location = ? ORDER BY events.id ASC",
			[location],
			(error, results, fields) => {
				if (error) {
					return callBack(error);
				}
				return callBack(null, results);
			}
		);
	},

	// Define a prepared statement for updating an event
	UpdateEvent : (id, data, callBack) => {
		pool.query(
			"UPDATE events set name=?, description=?, image_url=?, date=?, price=?, is_repeating=?, is_publishhed=?, user_id=? WHERE id = ?",
			[
				data.name,
				data.description,
				data.image_url,
				data.date,
				data.price,
				data.is_repeating,
				data.is_published,
				data.user_id,
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

	// Define a prepared statement for deleting an event
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