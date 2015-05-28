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

Route::get('/', function(){
	return view('about');
});

Route::get('home', 'HomeController@index');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
	// Posts
	Route::get('posts', ['as' => 'admin.post.list', 'uses' => 'PostController@getIndex']);
	Route::get('posts/new', ['as' => 'admin.post.create', 'uses' => 'PostController@getModify']);
	Route::post('posts/new', ['as' => 'admin.post.create', 'uses' => 'PostController@postSave']);
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
