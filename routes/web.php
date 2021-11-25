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
    return view('index');
});
Route::get('/bplan', function () {
    return view('bplan');
});
Route::get('/content', function () {
    return view('content');
});
Route::get('/crypto', function () {
    return view('crypto');
});
Route::get('/hackthon', function () {
    return view('hackthon');
});
Route::get('/ipl', function () {
    return view('ipl');
});
Route::get('/nis', function () {
    return view('nis');
});
Route::get('/rana', function () {
    return view('rana');
});
Route::get('/soni', function () {
    return view('soni');
});
Route::get('/startup', function () {
    return view('startup');
});
Route::get('/stock', function () {
    return view('stock');
});
Route::get('/workshop', function () {
    return view('workshop');
});Route::get('/workshoptech', function () {
    return view('workshoptech');
});


