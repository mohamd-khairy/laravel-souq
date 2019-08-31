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

// Route::auth();
Route::get('/show_product', function () {
    return view('show_product');
});
Route::get('/show_special_product', function () {
    return view('show_special_product');
});
// Route::get('/show_product', 'HomeController@index');
Route::post('/add_pro', 'HomeController@add_pro');
