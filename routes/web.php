<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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
    return view('index', ['fondo'=>'#f6ec9c']);
});
Route::resource('/books',BookController::class );
Route::resource('/users',UserController::class );



Route::get('/books/{id}/drop', [\App\Http\Controllers\BookController::class , 'drop' ]);
Route::get('/users/{id}/drop', [\App\Http\Controllers\UserController::class , 'drop' ]);

Route::get('/books/{book_id}/borrow', [\App\Http\Controllers\LendingController::class , 'borrow_form' ]);
Route::post('/books/{book_id}/borrow', [\App\Http\Controllers\LendingController::class , 'borrow' ]);

Route::get('/books/{book_id}/return', [\App\Http\Controllers\LendingController::class , 'return_form' ]);
Route::post('/books/{book_id}/return', [\App\Http\Controllers\LendingController::class , 'return' ]);
Route::get('/books/lendings/history', [\App\Http\Controllers\LendingController::class , 'history' ]);
Route::get('/users/{id}/lendings/history', [\App\Http\Controllers\LendingController::class , 'historyByUser' ]);

Route::get('/books/{book_id}/confirmMail', [\App\Http\Controllers\BookController::class, 'confirmMail' ])->name('ConfirmMail');
Route::post('/books/{book_id}/sendMail', [\App\Http\Controllers\BookController::class, 'sendMail' ])->name('SendMail');
