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

Route::get('/',function(){
	return view('home');
})->name('home');

Route::get('/contact_us',function(){
	return view('contact');
})->name('contact_us');

Route::get('/submit_lyrics',function(){
	return view('submit');
})->name('submit_lyrics');

Route::get('/lyrics',function(){
	return view('song');
})->name('lyrics');


Route::get('/privacy_policy',function(){
	return view('privacy');
})->name('privacy_policy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
