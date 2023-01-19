<?php

use App\Http\Controllers\TrooperController;
use Illuminate\Support\Facades\Route;
use App\Models\trooper;

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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/troopers', function () {
    return view('troopers.index');
});

Route::get('/troopers/create', function () {
    return view('troopers.create');
});

Route::get('/collection', function () {
    return view('collection', [
        'troopers' => trooper::all()
    ]);
});

Route::get('/troopers/edit', function () {
    return view('troopers.edit');
});

Route::get('/troopers/adminshow', function () {
    return view('troopers.adminshow');
});

Route::resource('troopers', TrooperController::class);

Auth::routes();


//Route::view('/troopers', 'troopers.index')->name('troopers')->middleware(['auth']);

//Route::view('/post', 'post')->name('post')->middleware(['auth']);

//Route::view('/troopers', 'troopers.index')->name('troopers.index')->middleware(['auth']);

Route::view('/troopers/create', 'troopers.create')->name('troopers.create')->middleware(['auth']);

Route::view('/troopers/edit', 'troopers.edit')->name('troopers.edit')->middleware(['auth']);

Route::view('/troopers/adminshow', 'troopers.adminshow')->name('troopers.adminshow')->middleware(['auth']);

Route::view('/profile', 'profile')->name('profile')->middleware(['auth']);




