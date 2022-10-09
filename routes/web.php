<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/test', [TestController::class, 'index']);

        Route::resource('/', HomeController::class);

        Route::get('/show', [HomeController::class, 'show'])->name('show');
        Route::get('/filter', [HomeController::class, 'filter'])->name('filter');
        Route::get('/search', [HomeController::class, 'search'])->name('search');
        Route::get('/aboutme', function () {
            return view('aboutme');
        });

        Route::group(['Middleware' => ['auth']], function () {

            Route::get('/dashboard', function () {
                return view('dashboard');
            });
            Route::resource('categories', CategoryController::class);
            Route::resource('tags', TagsController::class);
            Route::resource('articles', ArticlesController::class);
        });
        require __DIR__ . '/auth.php';

    }
);
