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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/index', 'HomeController@front')->name('index');

/* ... ADD USERS ROUTE .... */
Route::get('add-record', 'UsersController@insertform');
Route::post('users.add-users', 'UsersController@insert')->name('users.add-users');

/* ... VIEW USERS ROUTE .... */


/* ... DELETE USERS ROUTE .... */
Route::get('delete-record', 'UsersController@index');
Route::get('delete/{id}', 'UsersController@destroy');


/*Route::get('/test', function() {
   return view('test');
});*/

Route::group(array('before' => 'auth'), function() {
    Route::get('/', 'HomeController@index');
    Route::get('view-users', 'UsersController@index')->name('view-users');
});
Auth::routes(['verify' => true]);