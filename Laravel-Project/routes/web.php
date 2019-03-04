<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/ver', function () {
    return "ver :";
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/user/{id}', function ($id) {
    return $id;
})->where(['id'=>'[0-5]+']);

Route::post('/send', function () {
    return "ok";
});