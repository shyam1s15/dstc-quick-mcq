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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('testExample', function () {
    return view('testExample');
});


Route::get('/', function() {
    return view('base.base');
});


Route::get('/test/ui', function() {
    return view('test.testUIimages');
});


Route::get('/test/ui2', function() {
    //
    return view('test.UI2');
});

Route::get('/test/ui3', function() {
    //
    return view('test.UI3');
});

