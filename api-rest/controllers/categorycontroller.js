// Use any defined variable in the .env file
require('dotenv').config();
// Use all the defined methods within the bdd file
const  { create, getCategoriesById, getCategoriesByLocation, UpdateCategory, DeleteCategory } = require('../models/category');

// Export all the category methods
module.exports = {
  // Register a new category
  createCategory : (req, res) => {
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

  // Returns category that has the specified id
  getCategoriesById : (req, res) => {
    const id = req.params.id;
    getCategoriesById(id, (err, results) => {
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

  // Returns categories registered in the specified location
  getCategoriesByLocation : (req, res) => {
    const location = req.params.location;
    getCategoriesByLocation(location, (err, results) => {
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

  // Update category that has specified id
  updateCategory : (req, res) => {
    const id = req.params.id;
    const body = req.body;
    UpdateCategory(id, body, (err, results) => {
      if (err) {
        console.log(err);
        return false;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Failed to update category"
        });
      }
      return res.json({
        success : 1,
        message : "Updated successfully"
      });
    });
  },

  // Delete category that has specified id
  deleteCategory : (req, res) => {
    const id = req.params.id;
    DeleteCategory(id, (err, results) => {
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
        message : "Category deleted successfully"
      });
    });
  }
};