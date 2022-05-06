<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Auth
 */
Route::get('/login', function (){
    return view('auth.login');
});
Route::get('/signup', function (){
    return view('auth.signup');
});

/**
 * CRUD Operations for events
 */
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{id}', [EventController::class, 'show']);
Route::get('/events/add', [EventController::class, 'create']);
Route::post('/events/add', [EventController::class, 'store']);
Route::get('/events/update', [EventController::class, 'edit']);
Route::post('/events/update/{id}', [EventController::class, 'update']);
Route::post('/events/delete/{id}', [EventController::class, 'destroy']);
