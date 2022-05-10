// Use any defined variable in the .env file
require('dotenv').config();

// This app requires the use of the Express and body-parser modules.
// The express variable will help us to use the functionalities of the Express module.  
var express = require('express'); 
// The bodyParser variable will help us to use the functionalities of the body-parser module. 
var bodyParser = require('body-parser');

// Import the methods defined for each controller
const { createOhter, login } = require('./controllers/ohtercontroller');
const { createUser, getUsersByLocation, getUsersById, updateUser, deleteUser } = require('./controllers/usercontroller');
const { createEvent, getEventsById, getEventsByLocation, updateEvent, deleteEvent } = require('./controllers/eventcontroller');
const { createArticle, getArticlesById, getArticlesByLocation, updateArticle, deleteArticle } = require('./controllers/articlecontroller');
const { createCategory, getCategoriesById, getCategoriesByLocation, updateCategory, deleteCategory } = require('./controllers/categorycontroller');
const { checkToken } = require('./authorization/token-validation');

// We create an object of type Express. 
var app = express(); 

// Analyze the data received by the API via the  body x-www-form-urlencoded
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
 
// In order to ease the routing (the URLs our API will support), we must create a Router object.
// It's through this myRouter object we will implement the different http methods. 
var myRouter = express.Router(); 

// Routes dedicated to the creation and the login of other websites designers
myRouter.post('/others/store',  createOhter);

myRouter.post('/others/login',  login);

// Routes related to users 
myRouter.get('/users/location/:location', checkToken, getUsersByLocation);

myRouter.get('/users/:id', checkToken, getUsersById);

myRouter.post('/users/store',  checkToken, createUser);

myRouter.put('/users/update/:id', checkToken, updateUser);

myRouter.delete('/users/delete/:id', checkToken, deleteUser);

// Routes related to events 
myRouter.get('/events/location/:location', checkToken, getEventsByLocation);

myRouter.get('/events/:id', checkToken, getEventsById);

myRouter.post('/events/store',  checkToken, createEvent);

myRouter.put('/events/update/:id', checkToken, updateEvent);

myRouter.delete('/events/delete/:id', checkToken, deleteEvent);

// Routes related to articles 
myRouter.get('/articles/location/:location', checkToken, getArticlesByLocation);

myRouter.get('/articles/:id', checkToken, getArticlesById);

myRouter.post('/articles/store',  checkToken, createArticle);

myRouter.put('/articles/update/:id', checkToken, updateArticle);

myRouter.delete('/articles/delete/:id', checkToken, deleteArticle);

// Routes related to categories 
myRouter.get('/categories/location/:location', checkToken, getCategoriesByLocation);

myRouter.get('/categories/:id', checkToken, getCategoriesById);

myRouter.post('/categories/store',  checkToken, createCategory);

myRouter.put('/categories/update/:id', checkToken, updateCategory);

myRouter.delete('/categories/delete/:id', checkToken, deleteCategory);

// We ask the application to use our router
app.use(myRouter);  

// Launch the server
app.listen(process.env.APP_PORT, process.env.DB_HOST, function() {
	console.log("Server running on http://"+ process.env.DB_HOST +":"+process.env.APP_PORT); 
});