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

Route::get('/hello', function () {
    return 'hello';
});

//Route::get('/customers', 'CustomerController@index');
//Route::post('/customers', 'CustomerController@store');
//Route::get('/customers/create', 'CustomerController@create');
//Route::get('/customers/{customer}', 'CustomerController@show');
//Route::get('/customers/{customer}/edit', 'CustomerController@edit');
//Route::patch('/customers/{customer}', 'CustomerController@update');
//Route::delete('/customers/{customer}', 'CustomerController@destroy');

Route::resource('customers', 'CustomerController');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


