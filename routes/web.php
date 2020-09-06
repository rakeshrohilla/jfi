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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/worker', function () {
    return view('worker/dashboard');
});

Route::get('/blocks', function () {
    return view('blocks');
});

Route::get('/cards', function () {
    return view('cards');
});

Route::get('/people', function () {
    return view('people');
});

Route::get('/forms', function () {
    return view('forms');
});

Route::get('/carousels', function () {
    return view('carousels');
});

Route::get('/pricing', function () {
    return view('pricing');
});