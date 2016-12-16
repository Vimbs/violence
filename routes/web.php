<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/contact', function () {

  //  return "hi contact";
//});

//Route::get('/post/{id}/{name}', function ($id, $name){

//	return "This is post number ". $id . " " . $name;
//});

Route::get('/', function () {

return view ('welcome');
	
});
Route::get('/post/{id}', 'PostsController@index');

Route::resource('posts', 'PostsController');

Route::get('/contact', 'PostsController@contact');

//Route::get('/classifieds', 'PostsController@classifieds');

Route::get('post/{id}', 'PostsController@show_post');