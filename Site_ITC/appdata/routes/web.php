<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

//page erreur 404
Route::fallback(function (){
    return view('404');
});






    Route::get('/', function () {
        return view('home.home');
    });

    Route::get('/about', function () {
        return view('home.home');
    });

    Route::get('/services', function () {
        return view('home.home');
    });

    Route::get('/projects', function () {
        return view('home.home');
    });

    Route::get('/contact', function () {
        return view('home.contact');
    });


