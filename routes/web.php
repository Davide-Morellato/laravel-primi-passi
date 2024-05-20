<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


/* creo la rotta per i link */
Route::get('/link1', function () {
    return view('link1');
});


Route::get('/link2', function () {
    return view('link2');
});


Route::get('/link3', function () {
    return view('link3');
});

