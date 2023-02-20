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
    return view('auth/login');
});

Auth::routes();
Route::get('/forgot', [App\Http\Controllers\LoginController::class, 'forgot'])->name('forgot');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('tips-diet')->group(function () {
    Route::get('/', [App\Http\Controllers\TipsDietController::class, 'index'])->name('tips.index');
    // Route::get('/create', 'Backend\UserController@create')->name('user.create');
    // Route::post('/store', 'Backend\UserController@store')->name('user.store');
    // Route::get('/edit/{id}', 'Backend\UserController@edit')->name('user.edit');
    // Route::post('/update/{id}', 'Backend\UserController@update')->name('user.update');
    // Route::get('/destroy/{id}', 'Backend\UserController@destroy')->name('user.destroy');
});

Route::prefix('bmi')->group(function () {
    Route::get('/', [App\Http\Controllers\BMIController::class, 'index'])->name('bmi.index');
    Route::get('/result', [App\Http\Controllers\BMIController::class, 'hasil'])->name('bmi.hasil');
});

Route::prefix('bmr')->group(function () {
    Route::get('/', [App\Http\Controllers\BMRController::class, 'index'])->name('bmr.index');
    Route::get('/result', [App\Http\Controllers\BMRController::class, 'hasil'])->name('bmr.hasil');
});
