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
Route::get('/receipt', function () {
    return view('receipt');
});


// Route::get('/product-detail', function () {
//     return view('product-detail');
// });



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//user profile
    Route::get('/profile-show/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('profile-show');
    Route::get('/profile-edit/{user}', [App\Http\Controllers\UserController::class, 'edit'])->name('profile-edit');
    Route::post('/profile-update/{user}', [App\Http\Controllers\UserController::class,'update'])->name('profile-update');


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
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
});

//Borrower Controller
Route::group(['prefix'=> 'borrower', 'as' => 'borrower.'], function(){

    Route::get('/catalog-index', [App\Http\Controllers\BorrowerController::class, 'indexCatalog'])->name('index-catalog');
    Route::get('/catalog-show/{book}', [App\Http\Controllers\BorrowerController::class, 'showCatalog'])->name('show-catalog');
    Route::get('/borrow-record', [App\Http\Controllers\BorrowerController::class, 'borrowRecord'])->name('borrow-record');
    // Route::get('/profile/{user}', [App\Http\Controllers\BorrowerController::class, 'profile'])->name('profile');
    // Route::get('/profile-edit/{user}', [App\Http\Controllers\BorrowerController::class, 'edit'])->name('profile-edit');
    // Route::post('/profile-update/{user}', [App\Http\Controllers\BorrowerController::class,'update'])->name('profile-update');
});

//staff controller
Route::group(['prefix'=> 'staff', 'as' => 'staff.'], function(){

    Route::get('/index', [App\Http\Controllers\StaffController::class, 'index'])->name('index');
    Route::get('/book-category', [App\Http\Controllers\StaffController::class, 'bookCategory'])->name('book-category');
    Route::get('/book-list', [App\Http\Controllers\StaffController::class, 'bookList'])->name('book-list');
    Route::get('/profile', [App\Http\Controllers\StaffController::class, 'profile'])->name('profile');
    Route::get('/rent-record', [App\Http\Controllers\StaffController::class, 'rentRecord'])->name('rent-record');
    Route::get('/status-rent', [App\Http\Controllers\StaffController::class, 'statusRent'])->name('status-rent');

});

//book
Route::group(['prefix'=> 'book', 'as' => 'book.'], function(){

    Route::get('/index', [App\Http\Controllers\BookController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\BookController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\BookController::class, 'store'])->name('store');
    Route::get('/show/{book}', [App\Http\Controllers\BookController::class, 'show'])->name('show');
    Route::get('/edit/{book}', [App\Http\Controllers\BookController::class, 'edit'])->name('edit');
    Route::post('/update/{book}', [App\Http\Controllers\BookController::class, 'update'])->name('update');
    Route::post('/destroy/{book}', [App\Http\Controllers\BookController::class, 'destroy'])->name('destroy');
});

//category
Route::group(['prefix'=> 'category', 'as' => 'category.'], function(){

    Route::get('/index', [App\Http\Controllers\CategoryController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('update');
    Route::post('/destroy/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('destroy');
});

