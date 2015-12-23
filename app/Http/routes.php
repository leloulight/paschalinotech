<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//store routes
Route::get('/', 'StoreController@getIndex');
Route::get('/store/', 'StoreController@getAllProducts');
Route::get('/store/about', 'StoreController@getAbout');
Route::get('/store/services', 'StoreController@getServices');
Route::get('/store/contact', 'StoreController@getContact');
Route::post('/customer/request','MailController@postMail');
Route::get('/store/product/{id}', 'StoreController@getEditProduct');
Route::get('/store/{id}', 'StoreController@getcategory');

//product REST route
Route::resource('/admin/products', 'ProductController');
//product REST route
Route::resource('/admin/categories', 'CategoryController');
//Admin route
Route::get('/admin', 'Auth\AdminController@getLogin');
//authentication route
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


