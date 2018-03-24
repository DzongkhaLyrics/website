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
	return view('index');
})->name('home');

Route::get('/contact_us',[
	'uses'=>'ContactUsController@create',
	'as'=>'contact_us'
]);
Route::post('/contact_us',[
	'uses'=>'ContactUsController@store',
	'as'=>'contact_us_store'
]);

Route::get('/submit_lyrics',function(){
	return view('submit');
})->name('submit_lyrics');

Route::get('/lyrics',function(){
	return view('song');
})->name('lyrics');

Route::get('/anthem',function(){
	return view('anthem');
})->name('anthem');


Route::get('/privacy_policy',function(){
	return view('privacy');
})->name('privacy_policy');

Route::get('/advertise',function(){
	return view('advertise');
})->name('advertise');





Auth::routes();

Route::get('/admin_home', 'HomeController@index')->name('admin_home');

Auth::routes();

Route::get('/admin_home', 'HomeController@index')->name('admin_home');

Auth::routes();

Route::get('/admin_home', 'HomeController@index')->name('admin_home');
