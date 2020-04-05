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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/setting', 'SettingController@index')->name('setting');

Route::middleware(['auth'])->group(function() {

	Route::put('/plant/{field}', 'PlantController@updatePlant')->name('update-plant');
	Route::get('/plant/{plant}/field/{field}/edit', 'plantController@editPlant')->name('edit-plant');

	Route::post('/plant_field/{field}', 'PlantController@plantField');
	Route::resource('/fields', 'FieldController');
	Route::resource('/plants', 'PlantController');
	Route::get('/calendar/{time}', 'HomeController@calendar');
	//users routes
	Route::resource('users', 'UserController')->except(['show']);

	//categories routes
	Route::resource('categories', 'CategoryController')->except(['show']);

	//materials routes
	Route::resource('materials', 'MaterialController')->except(['show']);

	// edit profile dat [phone and username]
	Route::put('edit-profile/{user}/update', 'HomeController@updateProfile')->name('edit-profile');

});

Auth::routes();

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
