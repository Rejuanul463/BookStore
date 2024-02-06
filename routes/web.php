<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class,'welcome']);

Route::get('/books', [BookController::class,'index'])->name('book.index');

Route::get('/books/{bookId}/show' , [BookController::class,'show'])->name('book.show');

Route::get('/books/create' , [BookController::class, 'create'])->name('book.create');

Route::post('/books' , [BookController::class, 'store'])->name('book.store');

Route::get('/books/{bookId}/edit', [BookController::class, 'edit'])->name('book.edit');

Route::Post('/books/update', [BookController::class, 'update'])->name('book.update');

Route::Post('/books/delete', [BookController::class, 'destroy'])->name('book.destroy');