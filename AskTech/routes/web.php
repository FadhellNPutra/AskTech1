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
//initial page (about & contact us page)
Route::get('/', function () {
    return view('partial.initial');
});
Route::get('/about', function(){
    return view('page.about');
});
Route::get('/contact', function(){
    return view('page.contact');
});
// home
Route::get('/master2', function(){
    return view('layout.master2');
});
// route buat testing
Route::get('/login', function(){
    return view('page.login');
});

Route::get('/register', function(){
    return view('page.register');
});