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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'FrontController@index')->name('front');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/settings', 'SettingsController@index')->name('settings');

Route::get('/profile', 'UserController@index')->name('profile');

Route::post('/profile/edit', 'UserController@update')->name('profile.edit');

Route::get('/projects', 'ProjectsController@index')->name('projects');

Route::get('/projects/create', 'ProjectsController@create')->name('projects.create');

Route::post('/projects/store', 'ProjectsController@store')->name('projects.store');

Route::get('/projects/edit/{projects}', 'ProjectsController@edit')->name('projects.edit');

Route::put('/projects/update/{projects}', 'ProjectsController@update')->name('projects.update');
