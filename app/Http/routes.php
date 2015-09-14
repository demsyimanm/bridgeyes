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

Route::group(['middleware' => 'auth'], function()
{
	Route::get('admin/home', 'AdminController@index');

	/*News*/
	Route::get('admin/news', 'NewsController@index');
	Route::get('admin/news/create', 'NewsController@create');
	Route::post('admin/news/create', array('before' => 'csrf', 'uses' => 'NewsController@create'));
	Route::get('admin/news/delete/{id}','NewsController@destroy');
	Route::post('admin/news/delete/{id}',array('before' => 'csrf', 'uses' => 'NewsController@destroy'));
	Route::get('admin/news/update/{id}','NewsController@update');
	Route::post('admin/news/update/{id}',array('before' => 'csrf', 'uses' => 'NewsController@update'));

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
	Route::get('admin/event/update/{id}','EventController@manage');
	Route::post('admin/event/update/{id}',array('before' => 'csrf', 'uses' => 'EventController@update'));
	Route::get('admin/event/delete/{id}','EventController@destroy');
	Route::post('admin/event/delete/{id}',array('before' => 'csrf', 'uses' => 'EventController@destroy'));

		/*Buletin*/
		Route::get('admin/event/manage/{id_event}/bulletin/create','BulletinController@create');
		Route::post('admin/event/manage/{id_event}/bulletin/create',array('before' => 'csrf', 'uses' => 'BulletinController@create'));
		Route::get('admin/event/manage/{id_event}/bulletin/delete/{id_bulletin}','BulletinController@destroy');
		Route::post('admin/event/manage/{id_event}/bulletin/delete/{id_bulletin}',array('before' => 'csrf', 'uses' => 'BulletinController@destroy'));
		Route::get('admin/event/manage/{id_event}/bulletin/update/{id_bulletin}','BulletinController@update');
		Route::post('admin/event/manage/{id_event}/bulletin/update/{id_bulletin}',array('before' => 'csrf', 'uses' => 'BulletinController@update'));

		/*Participant - single*/
		Route::get('admin/event/manage/{id_event}/participant/single/create','ParticipantSingleController@create');
		Route::post('admin/event/manage/{id_event}/participant/single/create',array('before' => 'csrf', 'uses' => 'ParticipantSingleController@create'));

		/*Gallery*/
		Route::get('admin/event/manage/{id_event}/gallery/create','GalleryController@create');
		Route::post('admin/event/manage/{id_event}/gallery/create',array('before' => 'csrf', 'uses' => 'GalleryController@create'));
		Route::get('admin/event/manage/{id_event}/gallery/delete/{id_photo}','GalleryController@destroy');
		Route::post('admin/event/manage/{id_event}/gallery/delete/{id_photo}',array('before' => 'csrf', 'uses' => 'GalleryController@destroy'));
});
