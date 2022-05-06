//Use any defined variable in the .env file
require('dotenv').config();
//Use all the defined methods within the bdd file
const  { create, getOtherByEmail } = require('../models/config');
const { genSaltSync, hashSync, compareSync } = require('bcrypt');
const  { sign } = require('jsonwebtoken');

module.exports = {
	createOhter : (req, res) => {
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

  login : (req, res) => {
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
			
			const result = compareSync(body.password, results.password);
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
			} else {
				return res.json({
					success : 0,
					message : "Invalid email or password",
				});
			}
 		});
  }
};