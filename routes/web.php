<?php

use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/test', function () {
    return view('test');
});
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//excel Route
Route::get('user/export', [App\Http\Controllers\UserController::class, 'export'])->name('export');
Route::get('/user/staffexport', [App\Http\Controllers\UserController::class, 'staffexport'])->name('staffexport');

//user profile
Route::get('/profile-show/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('profile-show');
Route::get('/profile-edit/{user}', [App\Http\Controllers\UserController::class, 'edit'])->name('profile-edit');
Route::post('/profile-update/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('profile-update');


//Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/index', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
    Route::get('/rent-record', [App\Http\Controllers\AdminController::class, 'rentRecord'])->name('rent-record');
    Route::get('/book-list', [App\Http\Controllers\AdminController::class, 'bookList'])->name('book-list');
    Route::get('/book-category', [App\Http\Controllers\AdminController::class, 'bookCategory'])->name('book-category');
    Route::get('/user-list', [App\Http\Controllers\AdminController::class, 'userList'])->name('user-list');
    Route::get('/create-list', [App\Http\Controllers\AdminController::class, 'createList'])->name('create-list');
    Route::get('/report', [App\Http\Controllers\AdminController::class, 'report'])->name('report');
    Route::get('/profile-edit/{user}', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile-edit');
    Route::post('/profile-update/{user}', [App\Http\Controllers\AdminController::class, 'update'])->name('profile-update');
    Route::get('/profile-add', [App\Http\Controllers\AdminController::class, 'create'])->name('profile-add');
    Route::post('/store', [App\Http\Controllers\AdminController::class, 'store'])->name('store');
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/create-role', [App\Http\Controllers\UserController::class, 'create'])->name('create-role');
    Route::post('/store-role', [App\Http\Controllers\UserController::class, 'store'])->name('store-role');
    Route::post('/delete-user/{user}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('delete-user');
});

//Borrower
Route::group(['prefix' => 'borrower', 'as' => 'borrower.'], function () {

    Route::get('/catalog-index', [App\Http\Controllers\RentalController::class, 'indexCatalog'])->name('index-catalog');
    Route::get('/catalog-show/{book}', [App\Http\Controllers\RentalController::class, 'showCatalog'])->name('show-catalog');
    Route::post('/catalog-find', [App\Http\Controllers\RentalController::class, 'findCatalog'])->name('find-catalog');
    Route::get('/borrow-record', [App\Http\Controllers\RentalController::class, 'borrowRecord'])->name('borrow-record');
    Route::get('/booking', [App\Http\Controllers\RentalController::class, 'index'])->name('index-booking');
    Route::post('/booking/{id}', [App\Http\Controllers\RentalController::class, 'store'])->name('store-booking');
    Route::get('/user-receipt-pdf', [App\Http\Controllers\RentalController::class, 'pdfReportUser'])->name('pdf-user-receipt');
    Route::get('/book-list', [App\Http\Controllers\RentalController::class, 'listbook'])->name('book-list');
    Route::get('/rental-record', [App\Http\Controllers\RentalController::class, 'rentalRecord'])->name('rental-record');
    Route::get('/active-record', [App\Http\Controllers\RentalController::class, 'activeRecord'])->name('active-record');
});

//staff
Route::group(['prefix' => 'staff', 'as' => 'staff.'], function () {

    Route::get('/index', [App\Http\Controllers\StaffController::class, 'index'])->name('index');
    Route::get('/rent-record', [App\Http\Controllers\StaffController::class, 'rentRecord'])->name('rent-record');
    Route::get('/status-rent-damage{rental}', [App\Http\Controllers\RentalController::class, 'statusRentDamage'])->name('status-rent-damage');
    Route::get('/status-rent{rental}', [App\Http\Controllers\RentalController::class, 'statusRent'])->name('status-rent');
    Route::get('/rental-report-pdf', [App\Http\Controllers\RentalController::class, 'pdfReportRental'])->name('pdf-report-rental');
    Route::get('/rent-receipt-pdf/{rental}', [App\Http\Controllers\RentalController::class, 'pdfReceipt'])->name('pdf-receipt-rental');
});

//status-rents
Route::group(['prefix' => 'status-rents', 'as' => 'status-rents.'], function () {

    Route::get('/complete', [App\Http\Controllers\StatusRentController::class, 'complete'])->name('complete');
    Route::get('/complete-replace', [App\Http\Controllers\StatusRentController::class, 'completeReplace'])->name('complete-replace');
    Route::get('/complete-paid', [App\Http\Controllers\StatusRentController::class, 'completePaid'])->name('complete-paid');
    Route::get('/late', [App\Http\Controllers\StatusRentController::class, 'late'])->name('late');
    Route::get('/pending', [App\Http\Controllers\StatusRentController::class, 'pending'])->name('pending');
    Route::get('/rent', [App\Http\Controllers\StatusRentController::class, 'rent'])->name('rent');
    Route::get('/pickup', [App\Http\Controllers\StatusRentController::class, 'pickup'])->name('pickup');
});

//generate pdf by status
Route::group(['prefix' => 'generate-pdf-status-rents', 'as' => 'generate-pdf-status-rents.'], function () {

    Route::get('/complete', [App\Http\Controllers\StatusRentController::class, 'completePdf'])->name('complete');
    Route::get('/complete-replace', [App\Http\Controllers\StatusRentController::class, 'completeReplacePdf'])->name('complete-replace');
    Route::get('/complete-paid', [App\Http\Controllers\StatusRentController::class, 'completePaidPdf'])->name('complete-paid');
    Route::get('/late', [App\Http\Controllers\StatusRentController::class, 'latePdf'])->name('late');
    Route::get('/pending', [App\Http\Controllers\StatusRentController::class, 'pendingPdf'])->name('pending');
    Route::get('/rent', [App\Http\Controllers\StatusRentController::class, 'rentPdf'])->name('rent');
    Route::get('/pickup', [App\Http\Controllers\StatusRentController::class, 'pickupPdf'])->name('pickup');
});

//generate excel by status
Route::group(['prefix' => 'generate-excel-status-rents', 'as' => 'generate-excel-status-rents.'], function () {

    Route::get('/complete', [App\Http\Controllers\StatusRentController::class, 'completeExcel'])->name('complete');
    Route::get('/complete-replace', [App\Http\Controllers\StatusRentController::class, 'completeReplaceExcel'])->name('complete-replace');
    Route::get('/complete-paid', [App\Http\Controllers\StatusRentController::class, 'completePaidExcel'])->name('complete-paid');
    Route::get('/late', [App\Http\Controllers\StatusRentController::class, 'lateExcel'])->name('late');
    Route::get('/pending', [App\Http\Controllers\StatusRentController::class, 'pendingExcel'])->name('pending');
    Route::get('/rent', [App\Http\Controllers\StatusRentController::class, 'rentExcel'])->name('rent');
    Route::get('/pickup', [App\Http\Controllers\StatusRentController::class, 'pickupExcel'])->name('pickup');
});

//book
Route::group(['prefix' => 'book', 'as' => 'book.'], function () {
    Route::get('/index', [App\Http\Controllers\BookController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\BookController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\BookController::class, 'store'])->name('store');
    Route::get('/show/{book}', [App\Http\Controllers\BookController::class, 'show'])->name('show');
    Route::get('/edit/{book}', [App\Http\Controllers\BookController::class, 'edit'])->name('edit');
    Route::post('/update/{book}', [App\Http\Controllers\BookController::class, 'update'])->name('update');
    Route::post('/destroy/{book}', [App\Http\Controllers\BookController::class, 'destroy'])->name('destroy');
    Route::get('/IndexRestore', [App\Http\Controllers\BookController::class, 'IndexRestore'])->name('IndexRestore');
    Route::get('/restore/{book}', [App\Http\Controllers\BookController::class, 'restore'])->name('restore');
    Route::get('/restore-all', [App\Http\Controllers\BookController::class, 'restoreAll'])->name('restoreAll');
});

//category
Route::group(['prefix' => 'category', 'as' => 'category.'], function () {

    Route::get('/index', [App\Http\Controllers\CategoryController::class, 'index'])->name('index');
    Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('store');
    Route::get('/edit/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit');
    Route::post('/update/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('update');
    Route::post('/destroy/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('destroy');
    Route::get('/IndexRestore', [App\Http\Controllers\CategoryController::class, 'IndexRestore'])->name('IndexRestore');
    Route::get('/restore/{book}', [App\Http\Controllers\CategoryController::class, 'restore'])->name('restore');
    Route::get('/restore-all', [App\Http\Controllers\CategoryController::class, 'restoreAll'])->name('restoreAll');
});

Route::get('/rent-receipt', [App\Http\Controllers\RentalController::class, 'pdfReceipt'])->name('generate-receipt');
