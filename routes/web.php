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

/* 練習 1：設定 Route 反應
Route::get('/', function () {
    //Exercise 1-1
    //return 'welcome';

    //Exercise 1-2
    //return view('welcome');

    //Exercise 1-3
    //return redirect('welcome');
});
*/

Route::get('hello/{Ruby}', function ($Ruby) {
    //Exercise 2-1
    //return 'Hello, '  .$Ruby;
});

Route::get('hello/{Ruby?}', function ($name = 'Everybody') {
    //Exercise 2-3
    return 'Hello, '  .$name;
});