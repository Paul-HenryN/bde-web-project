// Use any defined variable in the .env file
require('dotenv').config();
// Use all the defined methods within the bdd file
const  { create, getArticlesById, getArticlesByLocation, UpdateArticle, DeleteArticle } = require('../models/article');

// Export all the article methods
module.exports = {
  // Register a new article
  createArticle : (req, res) => {
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
  getArticlesById : (req, res) => {
    const id = req.params.id;
    getArticlesById(id, (err, results) => {
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
  getArticlesByLocation : (req, res) => {
    const location = req.params.location;
    getArticlesByLocation(location, (err, results) => {
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

  // Update article that has specified id
  updateArticle : (req, res) => {
    const id = req.params.id;
    const body = req.body;
    UpdateArticle(id, body, (err, results) => {
      if (err) {
        console.log(err);
        return false;
      }
      if (!results) {
        return res.json({
          success : 0,
          message : "Failed to update Article"
        });
      }
      return res.json({
        success : 1,
        message : "Updated successfully"
      });
    });
  },

  // Delete article that has specified id
  deleteArticle : (req, res) => {
    const id = req.params.id;
    DeleteArticle(id, (err, results) => {
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
        message : "Article deleted successfully"
      });
    });
  }
};