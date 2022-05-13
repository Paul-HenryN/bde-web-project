<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PDFExportController;


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

require __DIR__.'/auth.php';


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
Route::post('/events/search', [EventController::class, 'search']);

/**
 * CRUD Operations for articles
 */
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);
Route::post('/articles/search', [ArticleController::class, 'search']);

/**
 * CRUD Operations for categories
 */
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::post('/categories/search', [CategoryController::class, 'search']);

/**
 * Shop
 */
Route::get('/shop', [ShopController::class, 'index']);

/**
 * Commenting
 */
Route::post('/events/comment/{event_id}', [CommentController::class, 'store'])
    ->middleware('auth');

/**
 * Liking / Disliking
 */
Route::get('/events/like/{event_id}', [LikeController::class, 'store'])
    ->middleware('auth');
Route::get('/events/dislike/{event_id}', [LikeController::class, 'destroy'])
    ->middleware('auth');

/**
 * Subscribing / Unsubscribing
 */
Route::get('/events/subscribe/{event_id}', [SubscriptionController::class, 'store'])
    ->middleware('auth');
Route::get('/events/unsubscribe/{event_id}', [SubscriptionController::class, 'destroy'])
    ->middleware('auth');

Route::post('/shop/search', [ShopController::class, 'search']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/**
 * Ordering
 */
Route::post('/order', [OrderController::class, 'store'])
    ->middleware('auth');

/**
 * Mail Sending
 */
Route::get('/admin/validate/{event_id}', [EventController::class, 'publish']);
Route::put('/admin/validate/{event_id}', [EventController::class, 'publish']);

/**
 * Payment
 */
Route::get('/pay', function() {
    return view('pay.paypal');
});

/**
 * PDF Export
 */
Route::get('/eventsubscribers/{event_id}', [PDFExportController::class, 'getAllEventSubscribers']);

Route::get('/downloadpdf/{event_id}', [PDFExportController::class, 'downloadPDF']);