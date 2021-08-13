<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Book;

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
    return view('index');
});
Route::resource('/books',BookController::Class );
Route::resource('/users',UserController::Class );



Route::get('/books/{id}/drop', [\App\Http\Controllers\BookController::Class , 'drop' ]);
Route::get('/users/{id}/drop', [\App\Http\Controllers\UserController::Class , 'drop' ]);

Route::get('/books/{book_id}/borrow', [\App\Http\Controllers\LendingController::Class , 'borrow_form' ]);
Route::post('/books/{book_id}/borrow', [\App\Http\Controllers\LendingController::Class , 'borrow' ]);

Route::get('/books/{book_id}/return', [\App\Http\Controllers\LendingController::Class , 'return_form' ]);
Route::post('/books/{book_id}/return', [\App\Http\Controllers\LendingController::Class , 'return' ]);
Route::get('/books/lendings/history', [\App\Http\Controllers\LendingController::Class , 'history' ]);
