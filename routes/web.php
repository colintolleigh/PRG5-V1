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

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/index', function () {
    return view('index');
});

Route::resource('troopers', TrooperController::class);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'show'])->name('home');

Route::view('/post', 'post')->name('post')->middleware(['auth']);

Route::view('/create', 'create')->name('create')->middleware(['auth']);

