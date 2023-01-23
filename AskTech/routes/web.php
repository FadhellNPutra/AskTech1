<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\askController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\JawabanController;

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

// home dan
// Middleware
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dummy', function(){
        return view('page.dummy');
    });
    //profile
    Route::resource('profile', profileController::class)->only(['index','update']);

    // jawaban
    Route::post('/jawaban/{pertanyaan_id}', [JawabanController::class, 'simpan']);

});


// CRUD ASK
Route::resource('dummy', askController::class);

// AUTH ROUTE
Auth::routes();

