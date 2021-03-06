// Use any defined variable in the .env file
require('dotenv').config();
// Use all the defined methods within the bdd file
const  { create, getEventsById, getEventsByLocation, UpdateEvent, DeleteEvent } = require('../models/event');

// Export all the event methods
module.exports = {
  // Register a new event
  createEvent : (req, res) => {
    const body = req.body;
    create(body, (err, results) => {
      if(err) {
        console.log(err);
        return res.status(500).json({
          success : 0,
          message : "Database connection error"
        });
      }
      return res.status(200).json({
        success : 1,
        data : results
      });
    });
  },

  // Returns events registered in the specified id
  getEventsById : (req, res) => {
    const id = req.params.id;
    getEventsById(id, (err, results) => {
      if (err) {
        console.log(err);
        return;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Record not found"
        });
      }
      return res.json({
        success : 1,
        data : results
      });
    });
  },

  // Lists events registered in the specified location
  getEventsByLocation : (req, res) => {
		const location = req.params.location;
    getEventsByLocation(location, (err, results) => {
      if (err) {
        console.log(err);
        return;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Record not found"
        });
      }
      return res.json({
        success : 1,
        data : results
      });
    });
	},

  // Update event that has specified id
  updateEvent : (req, res) => {
    const id = req.params.id;
    const body = req.body;
    UpdateEvent(id, body, (err, results) => {
      if (err) {
        console.log(err);
        return false;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Failed to update event"
        });
      }
      return res.json({
        success : 1,
        message : "Updated successfully"
      });
    });
  },

  // Delete event that has specified id
  deleteEvent : (req, res) => {
    const id = req.params.id;
    DeleteEvent(id, (err, results) => {
      if (err) {
        console.log(err);
        return;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Record not found"
        });
      }
      return res.json({
        success : 1,
        message : "Event deleted successfully"
      });
    });
  }
};