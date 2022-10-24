<?php

use App\Http\Controllers\TrooperController;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/troopers', function () {
    return view('troopers.index');
});

Route::get('/troopers/create', function () {
    return view('troopers.create');
});

Route::get('/troopers/edit', function () {
    return view('troopers.edit');
});

Route::get('/troopers/show', function () {
    return view('troopers.show');
});

Route::resource('troopers', TrooperController::class);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('home');

//Route::view('/troopers', 'troopers.index')->name('troopers')->middleware(['auth']);

//Route::view('/post', 'post')->name('post')->middleware(['auth']);

//Route::view('/troopers', 'troopers.index')->name('troopers.index')->middleware(['auth']);

Route::view('/troopers/create', 'troopers.create')->name('troopers.create')->middleware(['auth']);

Route::view('/troopers/edit', 'troopers.edit')->name('troopers.edit')->middleware(['auth']);

Route::view('/troopers/show', 'troopers.show')->name('troopers.show')->middleware(['auth']);



