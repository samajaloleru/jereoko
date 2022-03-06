<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/shop', 'PagesController@shop');
Route::get('/blog', 'PagesController@blog');
Route::get('/service', 'PagesController@service');
Route::get('/contact', 'PagesController@contact');

Route::get('/view_product','PagesController@view_product');
Route::get('/checkout','CheckoutController@checkout');
// Route::get('/view_product/{product_id}','PagesController@view_product');

//cart routes
Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_cart');
Route::post('/update-cart','CartController@update_cart');