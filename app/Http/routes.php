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

Route::get('/','pagesController@home');
Route::get('/about','pagesController@about');
Route::get('/about/{name}','pagesController@about');
Route::get('/test','pagesController@test');

Route::get('/posts/{name?}',function($name='rony'){
	return "Post name is " . $name;
});


