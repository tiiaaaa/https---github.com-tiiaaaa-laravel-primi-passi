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
    return view('homepage');
});

Route::get('/header', function () {
    return view('header');
})->name('menu');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contatti');

Route::get('/footer', function () {
    return view('partials.footer');
})->name('links');
