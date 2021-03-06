<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['middleware' => ['auth'] ], function() {
	Route::get('/', 'HomeController@index')->name('home');

	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('employees/info', 'EmployeesController');

	Route::get('/employees', 'EmployeesController@index');

	Route::resource('projects', 'ProjectsController');

	Route::get('/projects', 'ProjectsController@index')->name('projects');
});