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

Route::get('/', 'HomeController@index');
Route::get('user/', 'UserController@index');
Route::get('user/write_news', 'UserController@create_news');
Route::get('user/write_article', 'UserController@create_article');
Route::get('blog/', 'HomeController@blog');
Route::get('article/', 'HomeController@all_article');
Route::get('news/', 'HomeController@all_news');
Route::get('signup/', 'UserController@signup');
Route::post('signup/auth/', array('before' => 'csrf', 'uses' => 'UserController@signup'));
Route::post('user/login/', array('before' => 'csrf', 'uses' => 'UserController@login'));
Route::post('user/postnews/', array('before' => 'csrf', 'uses' => 'UserController@post_news'));
Route::get('allevent/', 'HomeController@event');
Route::get('event/', 'HomeController@event_detail');
Route::get('event/participant/', 'HomeController@participant');
Route::get('event/result/', 'HomeController@result');
Route::get('event/bulletins/', 'HomeController@bulletins');
Route::get('event/gallery/', 'HomeController@gallery');


// Route::post('signup', 'UserController@signup');
