<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\NewsController;
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

Route::get('/', [BlogController::class, 'welcome']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/under-construction', function () {
    return view('under-construction');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact ', function () {
    return view('contact ');
});
Route::get('/blogs ', [BlogController::class, 'index']);
Route::get('/blog/{id} ', [BlogController::class, 'show']);
Route::get('/news', [NewsController::class, 'index']);


