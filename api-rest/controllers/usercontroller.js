//Use all the defined methods within the bdd file
const  { create, getUsersByLocation, getUsersById, UpdateUser, DeleteUser } = require('../models/user'); 
//These constant will help us to use the functionalities of bcrypt and jsonwebtoken modules.  
const { genSaltSync, hashSync } = require('bcrypt');

module.exports = {
  createUser : (req, res) => {
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

  updateUser : (req, res) => {
    const id = req.params.id;
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