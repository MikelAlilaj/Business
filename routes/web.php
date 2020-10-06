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

//Route::get('/', function () {
//    return view('pages.index');
//});

Auth::routes();

Route::group(['middleware'=>['auth','admin']],function() {
//category
    Route::get('all_categories', 'Admin\CategoryController@index')->name('all_categories');
    Route::get('add_category', 'Admin\CategoryController@create')->name('add_category');
    Route::post('store_category', 'Admin\CategoryController@store')->name('store_category');
    Route::get('edit_category/{id}', 'Admin\CategoryController@edit')->name('edit_category');
    Route::post('update_category/{id}', 'Admin\CategoryController@update')->name('update_category');

//subscribers
    Route::get('all_subscribers', 'Admin\CategoryController@all_subscribers')->name('all_subscribers');

//Business
    Route::post('businesses_datatable', 'Admin\BusinessController@businesses_datatable')->name('businesses_datatable');

    Route::get('all_approved', 'Admin\BusinessController@all_approved')->name('all_approved');
    Route::get('all_pending', 'Admin\BusinessController@all_pending')->name('all_pending');
    Route::get('all_featured', 'Admin\BusinessController@all_featured')->name('all_featured');

    Route::get('view_approved/{id}', 'Admin\BusinessController@view_approved')->name('view_approved');
    Route::get('view_pending/{id}', 'Admin\BusinessController@view_pending')->name('view_pending');
    Route::get('view_featured/{id}', 'Admin\BusinessController@view_featured')->name('view_featured');

    Route::get('/approve/{id}', 'Admin\BusinessController@approve')->name('approve');
    Route::get('/cancel/{id}', 'Admin\BusinessController@cancel')->name('cancel');
    Route::get('/feature/{id}', 'Admin\BusinessController@feature')->name('feature');

});

Route::group(['middleware'=>['auth']],function() {
//User
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('change_password', 'HomeController@change_password')->name('change_password');
    Route::post('update_password', 'HomeController@update_password')->name('update_password');

    Route::get('user_profile', 'UserController@user_profile')->name('user_profile');
    Route::post('users/update', 'UserController@update')->name('user_update');

//Business
    Route::get('view_by_category/{id}', 'BusinessController@view_by_category')->name('view_by_category');
    Route::get('add_business', 'BusinessController@create')->name('add_business');
    Route::post('store_business', 'BusinessController@store')->name('store_business');
    Route::get('edit_business/{id}', 'BusinessController@edit')->name('edit_business');
    Route::post('update_business/{id}', 'BusinessController@update')->name('update_business');
    Route::get('view_business/{id}', 'BusinessController@view_business')->name('view_business');
    Route::get('my_businesses', 'BusinessController@my_businesses')->name('my_businesses');
    Route::delete('delete_photo/{id}', 'BusinessController@delete_photo')->name('delete_photo');
    Route::delete('delete_video/{id}', 'BusinessController@delete_video')->name('delete_video');
    Route::delete('delete_doc/{id}', 'BusinessController@delete_doc')->name('delete_doc');
    Route::get('my_favorites', 'BusinessController@my_favorites')->name('my_favorites');
//Show City with ajax
    Route::get('/get/city/{state_id}', 'BusinessController@getCity');

//Message
    Route::post('store_message/{id}', 'MessageController@store')->name('store_message');
    Route::get('/all_messages/', 'MessageController@all_messages')->name('all_messages');
    Route::get('/message/{id}', 'MessageController@getMessage')->name('message');
    Route::get('/message_ajax/{id}', 'MessageController@getMessageAjax')->name('getMessageAjax');
    Route::post('message', 'MessageController@sendMessage');
});

Route::get('/','BusinessController@index')->name('index');
Route::post('search_business', 'BusinessController@search_business')->name('search_business');

//ADD Favorite
Route::get('add_favorite/{id}', 'FavoriteController@add_favorite');
Route::post('add_subscriber', 'FavoriteController@add_subscriber')->name('add_subscriber');


