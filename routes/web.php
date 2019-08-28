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
    return view('auth/login');
	//return Redirect::action('Auth\AuthController@showLoginForm');
});

Auth::routes();

// Route::group(['middleware' => 'auth'], function () {
//     Route::get('/', function () {
//         return view('auth/login');
//    });
// });

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'ContactsController@index')->name('user');
Route::get('/create', 'ContactsController@create')->name('create');
Route::post('/store', 'ContactsController@store')->name('store');
Route::get('/showuser', 'UserController@index')->name('showuser');
Route::post('/update', 'UserController@update')->name('update');
Route::get('/show' , 'ContactsController@show')->name('show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
