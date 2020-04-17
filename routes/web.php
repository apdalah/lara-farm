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

Route::group([

		'prefix' => LaravelLocalization::setLocale(),
		'middleware' => ['localizationRedirect', 'localeSessionRedirect', 'localeViewPath']

	], function()
{

	Route::get('/', 'HomeController@index')->name('index');
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/steps', 'StepsController@index')->name('steps');
	Route::get('/setting', 'SettingController@index')->name('setting');

	Route::middleware(['auth.clients'])->group(function() {

		Route::put('/plant/{field}', 'PlantController@updatePlant')->name('update-plant');
		Route::get('/plant/{plant}/field/{field}/edit', 'plantController@editPlant')->name('edit-plant');

		Route::post('/plant_field/{field}', 'PlantController@plantField')->name('plant-field.store');
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


});

Route::any('/admin/{any?}', 'AdminController@index')->where('any', '.*')->middleware('auth');

Route::group(['namespace' => 'AdminAuth'], function() {

	Route::get('signin', 'LoginController@showLoginForm')->name('signin');
	Route::post('adminLogin', 'LoginController@login')->name('adminLogin');
    Route::post('adminLogout', 'LoginController@logout')->name('adminLogout');
});
