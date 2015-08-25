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
Route::get('admin/login','AdminController@login');
Route::post('admin/login',array('before' => 'csrf', 'uses' => 'AdminController@login'));
Route::get('admin/logout','AdminController@logout');
Route::get('admin/register','AccountController@create');
Route::post('admin/register',array('before' => 'csrf', 'uses' => 'AccountController@create'));

Route::group(['middleware' => 'auth'], function()
{
	Route::get('admin/home', 'AdminController@index');

	/*News*/
	Route::get('admin/news', 'NewsController@index');

	/*Artikel*/
	Route::get('admin/artikel/{id}', 'ArtikelController@index');
	Route::get('admin/artikel/{id_1}/create', 'ArtikelController@create');
	Route::post('admin/artikel/{id_1}/create', array('before' => 'csrf', 'uses' => 'ArtikelController@create'));
	Route::get('admin/artikel/{id_kategori}/delete/{id_artikel}', 'ArtikelController@destroy');
	Route::post('admin/artikel/{id_kategori}/delete/{id_artikel}', array('before' => 'csrf', 'uses' => 'ArtikelController@destroy'));
	Route::get('admin/artikel/{id_kategori}/update/{id_artikel}', 'ArtikelController@update');
	Route::post('admin/artikel/{id_kategori}/update/{id_artikel}', array('before' => 'csrf', 'uses' => 'ArtikelController@update'));

	/*Users*/
	Route::get('admin/users','AccountController@index');
	Route::get('admin/users/create','AccountController@create');
	Route::post('admin/users/create',array('before' => 'csrf', 'uses' => 'AccountController@create'));
	Route::get('admin/users/delete/{id}','AccountController@destroy');
	Route::post('admin/users/delete/{id}',array('before' => 'csrf', 'uses' => 'AccountController@destroy'));
	Route::get('admin/users/update/{id}','AccountController@update');
	Route::post('admin/users/update/{id}',array('before' => 'csrf', 'uses' => 'AccountController@update'));

	/*Event*/
	Route::get('admin/event','EventController@index');
	Route::get('admin/event/create','EventController@create');
	Route::post('admin/event/create',array('before' => 'csrf', 'uses' => 'EventController@create'));
	Route::get('admin/event/update/{id}','EventController@update');
	Route::post('admin/event/update/{id}',array('before' => 'csrf', 'uses' => 'EventController@update'));
	Route::get('admin/event/delete/{id}','EventController@destroy');
	Route::post('admin/event/delete/{id}',array('before' => 'csrf', 'uses' => 'EventController@destroy'));

	Route::get('admin/event/manage/{id}','EventController@manage');

});
