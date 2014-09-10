<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::post('/music/login',"MusicController@login");

Route::get('/music/index',"MusicController@index");

Route::get('/user',"UserController@getUserName");

Route::get('/user/{name}',function($name) {

	echo 'Here is your '. $name;
}) ->where('name' , '[A-Za-z]+');

Route::get('/blog/{name}',function($name) {

	echo 'Here is your '. $name;
}) ->where('name' , '[A-Za-z]+');
