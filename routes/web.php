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

/* ... USERS-CONTROLLER.... */

/* ... USER PROFILE ROUTE .... */
Route::get('my-profile', 'UsersController@profile')->name('my-profile');

/* ... ADD USERS ROUTE .... */
Route::get('add-record', 'UsersController@insertform')->name('add-record');
Route::post('users.add-users', 'UsersController@insert')->name('users.add-users');

/* ... VIEW USERS ROUTE .... */
Route::get('view-users', 'UsersController@index')->name('view-users');

/* ... DELETE USERS ROUTE .... */
Route::get('delete/{id}', 'UsersController@destroy')->name('delete');

/* ... EDIT USERS ROUTE .... */
Route::get('edit-users/{id}', 'UsersController@show')->name('edit-users');
Route::post('update','UsersController@update')->name('update');

/* ... DONATION-CONTROLLER.... */
Route::get('main-page', 'DonationController@home')->name('main-page');

Route::get('show-users', 'DonationController@show_data')->name('show-users');

Route::get('add-user', 'DonationController@insert');
Route::post('donations.add-users', 'DonationController@store')->name('donations.add-users');

Route::get('delete-record', 'DonationController@index');
Route::get('dlt/{id}', 'DonationController@destroy');

Route::group(array('before' => 'auth'), function() {
    Route::get('/', 'HomeController@index');
    //Route::get('view-users', 'UsersController@index')->name('view-users');
});
Auth::routes(['verify' => true]);