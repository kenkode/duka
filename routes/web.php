<?php

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

Route::get("/authenticate_user", "AndroidController@authenticateUser");

Route::get("/get_items", "AndroidController@getOrderItems");

Route::get('/get_categories', 'AndroidController@getCategories');

Route::get('/get_products', 'AndroidController@getProducts');

Route::get('/get_accessories', 'AndroidController@getAccessories');

Route::get('/get_services', 'AndroidController@getServices');

Route::get('/get_sizes', 'AndroidController@getSizes');

Route::get('/get_bulk_gas', 'AndroidController@getBulkGas');

Route::get('/get_gases', 'AndroidController@getGases');

Route::get('/my_locations','AndroidController@getLocations');

Route::get('/place_order', 'AndroidController@placeOrder');

Route::get('/add_location', 'AndroidController@addLocation');

Route::get('/add_user', 'AndroidController@addUser');

Route::get('/my_orders', 'AndroidController@getHistory');

Route::get("/disable_location", "AndroidController@disableLocation");

Route::get("/update_user", "AndroidController@updateUser");


  