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

Route::get('/import', function()
{
	return View::make('import_index');
});

Route::get('/import/parliament',array(
	'as'=>'run_data_import',
	'uses'=>'DataController@importParliament'
));

Route::get('/state/{state}', function($state){
	// App::make('MapController')->showMap($state);
	return View::make('map');
});

Route::get('/request/latlng/{state}',array(
	'as'=>'logout',
	'uses'=>'MapController@getState'
));

Route::get('/request/dm/{state}',array(
	'as'=>'logout',
	'uses'=>'MapController@getDm'
));

Route::get('/test', function()
{
	return View::make('test');
});