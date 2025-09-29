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

Route::get('/', function (){
    return view('welcome');
});
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/admin', function (){
    return view('admin.index');
});


// User Routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'auth.admin'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Admin Routes
Route::middleware(['auth.admin'])
    ->prefix('admin')
    ->group(function () {
        Route::get('/dashboard', 'App\Http\Controllers\Admin\AdminController@dashboard')->name('admin.dashboard');
        Route::resource('/state', \App\Http\Controllers\StateController::class);
        Route::resource('/city', \App\Http\Controllers\CityController::class);
        Route::resource('/category', \App\Http\Controllers\CategoryController::class);
});
