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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'showPost'])->name('show-post');
Route::get('/tasks', [\App\Http\Controllers\PostController::class, 'showTask'])->name('show-task');


Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('user', \App\Http\Controllers\Admin\UserController::class);

});

Route::middleware(['role:admin'])->prefix('cabinet')->group
(function () {
    Route::get('/home', [\App\Http\Controllers\Cabinet\HomeController::class, 'index'])->name('cabinet');
    Route::resource('posts', \App\Http\Controllers\Cabinet\PostController::class);
    Route::resource('tasks', \App\Http\Controllers\Cabinet\TaskController::class);
});


//Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show'])->name('show-post');