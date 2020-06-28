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

Route::group(['middleware' => 'auth', 'prefix' => '/admin/'], function () {
    # Home Page Admin
    Route::get('home', 'HomeController@index')->name('home');

    # Search citys of certain state
    Route::get('citys/{state_id}', 'HomeController@searchCitys')->name('searchCitys');

    # Page Info Company
    Route::get('information', 'HomeController@info')->name('information');

    # Page Customers Company
    Route::get('customers', 'CustomerController@index')->name('customer.index');
    Route::get('customers/create', 'CustomerController@create')->name('customer.create');
    Route::post('customers/store', 'CustomerController@store')->name('customer.store');





});


