<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Users
Route::ApiResource('/users', 'UserController');
Route::ApiResource('/vendors', 'VendorController');

// Products
Route::ApiResource('/products', 'ProductController');

// Pages
Route::ApiResource('/pages', 'PageController');

// Forms
Route::ApiResource('/forms', 'FormController');

// Companies
Route::ApiResource('/companies', 'CompanyController');

// Conversations
Route::post('/messages', 'ConversationController@send'); //send a message
Route::get('/messages', 'ConversationController@retrieve');

// Orders
Route::ApiResource('/orders', 'OrderController');

//authentication routes
Route::get('/user/test', 'AuthController@test');
Route::post('/login', 'AuthController@login');
Route::post('/signup', 'AuthController@signup');
Route::get('/user', 'AuthController@getUser')->middleware('auth:api');
