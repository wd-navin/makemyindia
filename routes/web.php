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
    return view('home');
});

Auth::routes();
/* ... HOME-CONTROLLER.... */
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'HomeController@front')->name('index');
Route::get('/user-images', 'HomeController@images')->name('user-images');
Route::post('/ajax_images', 'HomeController@ajax_images');

/* ... USERS-CONTROLLER.... */
Route::get('my-profile', 'UsersController@profile')->name('my-profile');
Route::get('add-record', 'UsersController@insertform')->name('add-record');
Route::post('users.add-users', 'UsersController@insert')->name('users.add-users');
Route::get('view-users', 'UsersController@index')->name('view-users');
Route::delete('delete', 'UsersController@destroy');
Route::get('edit-users/{id}', 'UsersController@show')->name('edit-users');
Route::post('update','UsersController@update')->name('update');

/* ... DONATION-CONTROLLER.... */
Route::get('main-page', 'DonationController@home')->name('main-page');
Route::get('show-users', 'DonationController@show_data')->name('donations.show-users');
Route::get('add-user', 'DonationController@insert')->name('donations.add-user');
Route::post('add-users', 'DonationController@store')->name('donations.add-users');
Route::delete('donation_delete', 'DonationController@destroy');

Route::group(array('before' => 'auth'), function() {
    Route::get('/', 'HomeController@index');
    //Route::get('view-users', 'UsersController@index')->name('view-users');
});
Auth::routes(['verify' => true]);