<?php

use Illuminate\Support\Facades\Route;

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

//Admin
//category
Route::get('all_categories','Admin\CategoryController@index')->name('all_categories');
Route::get('add_category', 'Admin\CategoryController@create')->name('add_category');
Route::post('store_category', 'Admin\CategoryController@store')->name('store_category');
Route::get('edit_category/{id}', 'Admin\CategoryController@edit')->name('edit_category');
Route::post('update_category/{id}', 'Admin\CategoryController@update')->name('update_category');

//User
Route::get('/home', 'HomeController@index')->name('home');

Route::get('user_profile', 'UserController@user_profile')->name('user_profile');
Route::post('users/{user}/update', 'UserController@update')->name('user_update');

Route::get('add_business', 'BusinessController@create')->name('add_business');
// For Show City with ajax
Route::get('get/city/{state_id}', 'BusinessController@getCity');
