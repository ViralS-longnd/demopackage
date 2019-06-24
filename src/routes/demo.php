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

Route::get('/demo', function () {
    return view('demopackage::package_demo');
});

Route::get('/hello', function () {
    return view('demopackage::hello');
});

Route::get('/hihi', function () {
    return view('demopackage::hihi');
});

