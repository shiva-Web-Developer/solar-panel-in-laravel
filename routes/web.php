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
    return view('frontend.index');
});

Route::get('about', function () {
    return view('frontend.about');
});

Route::get('services', function () {
    return view('frontend.services');
});


Route::get('contact', function () {
    return view('frontend.contact');
});

Route::get('default', function () {
    return view('frontend.default');
});

Route::get('pricing', function () {
    return view('frontend.pricing');
});

