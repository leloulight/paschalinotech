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

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => 'auth'], function()
{
    Route::resource('admin/product', 'ProductController');
    Route::resource('admin/categories', 'CategoryController');
});
Route::get('/admin',['middleware'=>'auth' ,function () {
    return redirect()->guest('auth/login');
}]);

