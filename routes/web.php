<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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
    // Route::resource('/category', CategoryController::class);
    // Route::get('/category',[CategoryController::class,'index'])->name('category.index');
    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category', [CategoryController::class, 'create'])->name('category.create');

    // Route::post('/category/{id}', [CategoryController::class, 'store'])->name('category.store');
});
Route::get('/home', [HomeController::class, 'index'])->name("home.index");

// Route::post('/category/{id}',[CategoryController::class,'store'])->name('books.index');
// Route::resource('/category',CategoryController::class)
// Route::get('/book',[BookController::class,'index'])->name("book.index");
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
