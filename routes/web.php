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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/test', function () {
    return view('test');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin Controller
Route::group(['prefix'=> 'admin', 'as' => 'admin.'], function(){
    Route::get('/index', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
    Route::get('/rent-record', [App\Http\Controllers\AdminController::class, 'rentRecord'])->name('rent-record');
    Route::get('/book-list', [App\Http\Controllers\AdminController::class, 'bookList'])->name('book-list');
    Route::get('/book-category', [App\Http\Controllers\AdminController::class, 'bookCategory'])->name('book-category');
    Route::get('/status-rent', [App\Http\Controllers\AdminController::class, 'statusRent'])->name('status-rent');
    Route::get('/user-list', [App\Http\Controllers\AdminController::class, 'userList'])->name('user-list');
    Route::get('/create-list', [App\Http\Controllers\AdminController::class, 'createList'])->name('create-list');
    Route::get('/report', [App\Http\Controllers\AdminController::class, 'report'])->name('report');
});

//Borrower Controller
Route::group(['prefix'=> 'borrower', 'as' => 'borrower.'], function(){

    Route::get('/index', [App\Http\Controllers\BorrowerController::class, 'index'])->name('index');

});
