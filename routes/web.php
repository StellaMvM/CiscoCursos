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
    return view('welcome');
});
Route::get('/inicio', function () {
    return view('welcome');
});
Route::get('/ccna', function () {
    return "estamos ccna";
});
Route::get('/ccnp', function () {
    return "estamos en ccnp";
});
Route::get('/staff', function () {
    return "estamos en staff";
});
Route::get('/galeria', function () {
    return "estamos en galeria";
});
Route::get('/contacto', function () {
    return "estamos en contacto";
});