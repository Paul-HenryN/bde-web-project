// Use all the defined methods within the user file
const  { create, getUsersByLocation, getUsersById, UpdateUser, DeleteUser } = require('../models/user'); 
// These constant will help us to use the functionalities of bcrypt module.  
const { genSaltSync, hashSync } = require('bcrypt');

// Export all the user methods
module.exports = {
  //Register new user
  createUser : (req, res) => {
    //Encrypt his password before saving it in the database
    const body = req.body;
    const salt = genSaltSync(10);
    body.password = hashSync(body.password, salt);
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

  // Lists users of the specified location
  getUsersByLocation : (req, res) => {
    const location = req.params.location;
    getUsersByLocation(location, (err, results) => {
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

 // Returns user that has the specified id
  getUsersById : (req, res) => {
    const id = req.params.id;
    getUsersById(id, (err, results) => {
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

  // Update user that has specified id
  updateUser : (req, res) => {
    const id = req.params.id;
    //Encrypt his password again if it updates
    const body = req.body;
    const salt = genSaltSync(10);
    body.password = hashSync(body.password, salt);
    UpdateUser(id, body, (err, results) => {
      if (err) {
        console.log(err);
        return false;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Failed to update user"
        });
      }
      return res.json({
        success : 1,
        message : "Updated successfully"
      });
    });
  },

  // Delete user that has specified id
  deleteUser : (req, res) => {
    const id = req.params.id;
    DeleteUser(id, (err, results) => {
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
        message : "User deleted successfully"
      });
    });
  }
};