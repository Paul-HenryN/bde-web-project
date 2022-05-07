//Use any defined variable in the .env file
require('dotenv').config();
// Use all the defined methods within the config file
const  { create, getOtherByEmail } = require('../models/config');
// The variables below will help us to use bcrypt and jsonwebtoken functionalities
const { genSaltSync, hashSync, compareSync } = require('bcrypt');
const  { sign } = require('jsonwebtoken');

// Export all the methods related to an external person
module.exports = {
	// Let him create an account 
	createOhter : (req, res) => {
    const body = req.body;
		// Encrypt his password with the bcrypt module
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

	// Let him login before executing to any web queries
  login : (req, res) => {
		// Get his email and check if it exists in the database
		const body = req.body;
    getOtherByEmail(body.email, (err, results) => {
			if (err) {
				console.log(err);
			}

			if (!results) {
				return res.json({
					success : 0,
					data : "Invalid email or password"
				});
			}
			
			// If so, compare the password entered in the body section to the encrypted one in the database
			const result = compareSync(body.password, results.password);
			/* If there is a match, then reset the results password to undefined and proceed to the creation of 
			the json web token which will expire each 1 hour */
			if (result) {
				results.password = undefined;
				const  jsontoken = sign({ result : results }, process.env.JSON_WEB_TOKEN, {
					expiresIn : "1h"
				});
				return res.json({
					success : 1,
					message : "Login successfully",
					token : jsontoken
				});
			}
			// If no match is found then return an error message
			else {
				return res.json({
					success : 0,
					message : "Invalid email or password",
				});
			}
 		});
  }
};