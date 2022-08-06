<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagsController;
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
/*

 */

Route::resource('/', HomeController::class );

Route::get('/show', [HomeController::class, 'show'])->name('show');
Route::get('/aboutme', function () { return view('aboutme'); });

Route::group(['middleware' => ['auth']], function () {

    Route::get('/dashboard', function () { return view('dashboard'); });
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagsController::class);
    Route::resource('articles',ArticlesController::class );

    });
require __DIR__.'/auth.php';
