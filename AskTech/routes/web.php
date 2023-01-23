<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\askController;

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
Route::get('/home', function(){
    return view('page.home');
});

// route buat testing
Route::get('/login', function(){
    return view('page.login');
});
Route::get('/register', function(){
    return view('page.register');
});


//dummy


// CRUD ASK
Route::resource('dummy', askController::class);

// AUTH ROUTE
Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// app
Route::get('/app', function(){
    return view('layouts.app');
});
