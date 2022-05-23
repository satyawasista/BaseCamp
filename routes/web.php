<?php

use Illuminate\Support\Facades\App;
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

//rute baru
Route::get('homeopd', function () {
    return view('homeopd');
});

//rut landing page
Route::get('landingpage', function () {
    return view('landingpage');
});

//rut home
Route::get('home', function () {
    return view('home');
});

//rut home
Route::get('monitoring', function () {
    return view('monitoring');
});