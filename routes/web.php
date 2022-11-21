<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('/books', BookController::class);
});
Route::get('/home', [HomeController::class, 'index'])->name("home.index");


// Route::get('/book',[BookController::class,'index'])->name("book.index");
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
