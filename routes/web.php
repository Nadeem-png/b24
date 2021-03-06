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
Route::get('/partenership', function () {
    return view('partenership');
});
Route::get('/help', function () {
    return view('help');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/company', function () {
    return view('company');
});
Route::get('/term', function () {
    return view('term');
});

