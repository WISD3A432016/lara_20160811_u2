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
    //Exercise 1-1
    //return 'welcome';

    //Exercise 1-2
    //return view('welcome');

    //Exercise 1-3
    return redirect('welcome');
});
