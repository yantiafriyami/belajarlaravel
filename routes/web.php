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
	Route::get('/list_products', 'ProductController@listProducts');
	Route::get('/details_products', 'DetailsController@detailsProducts');
	Route::get('/new_products', 'NewController@newProducts');
	Route::get('/show_products', 'ShowController@showProducts');
	Route::get('/editproduct/{id}', 'NewController@show');
	Route::get('/login', 'LoginadminController@loginAdmin');
	Route::post('/editproduct_proses/{id}', 'NewController@edit');
	Route::get('/deleteproduct_proses/{id}', 'NewController@delete');
    Route::post('/newproduct_proses', 'NewController@store');
    Route::get('/profil', 'ProfilController@index');
    Route::get('post/create', 'NewController@store');
	Route::post('post', 'PostController@store');
    
   