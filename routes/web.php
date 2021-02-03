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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// https://xxxxxx.com
Route::get('/', 'TopController@index')->name('top');
// https://xxxxxx.com/home
Route::get('/home', 'HomeController@index')->name('home');
// https://xxxxxx.com/shoplist
Route::get('/', 'ShopController@index')->name('shoplist');
// https://xxxxxx.com/itemintroduction
Route::get('/', 'ItemintroductionController@index')->name('itemintroduction');
// https://xxxxxx.com/shopsearch
Route::get('/', 'ShopsearchController@index')->name('shopsearch');
