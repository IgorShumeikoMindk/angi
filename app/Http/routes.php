<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/blog-archive', function () {
    return view('blog-archive');
});

Route::get('/blog-single-with-left-sidebar', function () {
    return view('blog-single-with-left-sidebar');
});

Route::get('/blog-single-with-out-sidebar', function () {
    return view('blog-single-with-out-sidebar');
});

Route::get('/blog-single-with-right-sidebar', function () {
    return view('blog-single-with-right-sidebar');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/service', function () {
    return view('service');
});