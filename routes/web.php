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
Route::get('/shoplist', 'ShopController@index')->name('shoplist');
// https://xxxxxx.com/itemintroduction
Route::get('/itemintroduction', 'ItemintroductionController@index')->name('itemintroduction');
// https://xxxxxx.com/shopsearch
Route::get('/shopsearch', 'ShopsearchController@index')->name('shopsearch');
// https://xxxxxx.com/result
Route::get('/result', 'ResultController@index')->name('result');
// https://xxxxxx.com/shoppage
Route::get('/shoppage/{shop}', 'ShopController@show')->name('shoppage');