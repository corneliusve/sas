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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/test', 'HomeController@test')->name('test');


Route::group(['prefix' => 'account', 'middleware' => 'auth'], function(){

	Route::get('/{id}', 'Account\accountController@index')->name('account');

    //gegevens
    Route::get('/{id}/gegevens', 'Account\Gegevens\gegevensController@index')->name('gegevens');
    Route::put('/{id}/gegevens/update', 'Account\Gegevens\gegevensController@update')->name('gegevens.update');
});


Route::group(['prefix' => 'dashboard'], function(){

	Route::get('/', 'Dashboard\dashboardController@index')->name('dashboard');


	//Products
	Route::get('/producten', 'Products\productController@index')->name('producten');
	Route::get('/producten/create', 'Products\productController@create')->name('producten.create');
    Route::post('/producten/store', 'Products\productController@store')->name('producten.store');
    Route::get('/producten/show/{id}', 'Products\productController@show')->name('producten.show');
    Route::get('/producten/edit/{id}', 'Products\productController@edit')->name('producten.edit');
    Route::put('/producten/update/{id}', 'Products\productController@update')->name('producten.update');

    Route::delete('/producten/delete/{id}', 'Products\productController@destroy')->name('producten.delete');

	//Categories
	Route::get('/categories', 'Categories\categorieController@index')->name('categories');
	Route::get('/categories/create', 'Categories\categorieController@create')->name('categories.create');
	Route::post('/categories/store', 'Categories\categorieController@store')->name('categories.store');
	Route::get('/categories/{slug}', 'Categories\categorieController@show')->name('categories.show');
	Route::get('/categories/edit/{slug}', 'Categories\categorieController@edit')->name('categories.edit');
	Route::put('/categories/update/{slug}', 'Categories\categorieController@update')->name('categories.update');
	Route::delete('/categories/delete/{slug}', 'Categories\categorieController@delete')->name('categories.delete');


	//Sub Categories
	Route::post('/categories/{slug}/subcategorie/store', 'Categories\subCategorieController@store')->name('subcat.store');



});
