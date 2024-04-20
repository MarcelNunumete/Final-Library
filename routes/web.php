<?php

use App\Http\Controllers\BookadminController;
use App\Http\Controllers\BookDetailController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\BorrowinghistoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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



Route::resource('/dashboard', DashboardController::class);

Route::resource('/bookadmin', BookadminController::class);

Route::resource('/kategori', KategoriController::class);

Route::resource('/borrow', BorrowController::class);

Route::get('/borrowing', [BorrowinghistoryController::class, 'index'])->name('borrowing.index');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/user', UserController::class);

Route::get('/', [HomeController::class, 'index']);

Route::patch('/borrowing/{id}', [BorrowinghistoryController::class, 'updateStatus'])->name('update-status');

Route::resource('/profile', ProfileController::class);

Route::get('/laporan-peminjaman', [BorrowinghistoryController::class, 'generatePDF']);

