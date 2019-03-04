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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/addqustion', 'qustionController@create');
// Route::get('/qustion', 'qustionController@index');
Route::get('/blog', 'blogController@create');
Route::get('/profile', 'profileController@index');
Route::get('/userqustion', 'profileController@create');
 Route::resource('/qustions','qustionController');




