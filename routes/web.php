<?php

use App\Http\Controllers\BusDetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TicketController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Auth::routes();

//User Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search-bus', [HomeController::class, 'searchBus'])->name('searchBus');

Route::get('/bus-details',[BusDetailsController::class, 'index'])->name('busDetails');

Route::get('/payment',[InvoiceController::class, 'index'])->name('payment');
Route::get('/payment-details',[InvoiceController::class, 'paymentDetails'])->name('paymentDetails');

Route::get('ticket',[TicketController::class, 'ticket'])->name('ticket');

//Admin Routes




//Middleware Auth sanctum routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
