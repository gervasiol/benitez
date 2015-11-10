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

// Authentication routes.....................................
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Route::get('profile', ['middleware' => 'auth.basic', function() {
//     // Only authenticated users may enter...
// }]);




// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// // Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);

// //Route::resource('clientes', 'ClientesController');



/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
		require Config::get('generator.path_api_routes');
	});
});




Route::resource('clientes', 'ClientesController');

Route::get('clientes/{id}/delete', [
	'as' => 'clientes.delete',
	'uses' => 'ClientesController@destroy',
	]);




Route::resource('operadores', 'OperadoresController');

Route::get('operadores/{id}/delete', [
	'as' => 'operadores.delete',
	'uses' => 'OperadoresController@destroy',
	]);


Route::resource('colaboradores', 'ColaboradoresController');

Route::get('colaboradores/{id}/delete', [
	'as' => 'colaboradores.delete',
	'uses' => 'ColaboradoresController@destroy',
	]);

