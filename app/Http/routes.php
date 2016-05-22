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

Route::get('/', 'SearchesController@search');

Route::auth();

//Route::get('/home', 'HomeController@index');

Route::resource('devices', 'DevicesController');

Route::resource('persons', 'PersonsController');

Route::resource('teams', 'TeamsController');

Route::any('search', ['as'=>'searches.index', 'uses'=>'SearchesController@search'] );

//Route::resource('queries', 'QueryController');
