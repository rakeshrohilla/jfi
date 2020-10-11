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
Auth::routes();

Route::get('/', function () {
    return view('auth/login');
});

Route::group(['middleware' => ['auth','admin']], function () {

    Route::get('/dashboard', function () {
        return view('admin/dashboard');
    });
    Route::get('/retailer', function () {
        return view('admin/retailer');
    });
    Route::get('/employee', function () {
        return view('admin/employee');
    });
    Route::get('/retailer-profile', function () {
        return view('admin/retailer-profile');
    });
    Route::get('/data-view/{id}', 'Business@view');

});
Route::group(['middleware' => ['auth','worker']], function () {
    Route::get('/worker', function () {
        return view('worker/dashboard');
    });
    Route::get('/add-retailer', function () {
        return view('/worker/add-retailer');
    });
    Route::post('submit','Business@save');
    Route::get('/edit','Business@list');
Route::get('/data-edit/{id}', 'Business@edit');
Route::get('/data-delete/{id}', 'Business@delete');
Route::put('/update-retailer/{id}', 'Business@update');

});

Route::get('/create', function () {
    return view('crud/create');
});

Route::get('/home', 'HomeController@index')->name('home');




