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
    $books = config('comics');
    return view('home', compact('books'));
})->name('home');

Route::get('/comic', function () {
    $books = config('comics');
    return view('comic', compact('books'));
})->name('comic');
