<?php

Route::auth();

Route::resource('devices', 'DevicesController');

Route::resource('persons', 'User\PersonsController');

Route::resource('teams', 'User\TeamsController');

Route::get('/', 'DatatablesController@getIndex');

Route::get('datatables/data', ['as'=>'datatables.data', 'uses' => 'DatatablesController@anyData'] );

