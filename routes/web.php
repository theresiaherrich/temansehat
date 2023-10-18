<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Models\Booking;
use App\Http\Controllers\StaffController;
use App\Models\Staff;


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

Route::get('/', function () {
    return view('welcome');
});



Route::resource('/booking', \App\Http\Controllers\BookingController::class);
Route::resource('/datastaff', \App\Http\Controllers\StaffController::class);
Route::resource('/pasien', \App\Http\Controllers\SiswaController::class);
Route::get('/appointment', [BookingController::class, 'indexo'])->name('indexo');
Route::get('/admin', [StaffController::class, 'jumlah'])->name('jumlah');

