<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
Route::get('/home', [PageController::class, 'home']);

Route::get('/products', [PageController::class, 'products']);
Route::prefix('products')->group(function (){
    Route::get('/games', [PageController::class, 'games']);
    Route::get('/story', [PageController::class, 'story']);
    Route::get('/song', [PageController::class, 'song']);
});

Route::get('/news/{page}', [PageController::class, 'news']);

Route::get('/program', [PageController::class, 'program']);
Route::prefix('program')->group(function (){
    Route::get('/karir', [PageController::class, 'karir']);
    Route::get('/magang', [PageController::class, 'magang']);
    Route::get('/kunjungan-industri', [PageController::class, 'industri']);
});

Route::get('/about', [PageController::class, 'about']);

Route::resource('contact', PageController::class)->only(['index', 'store']);
