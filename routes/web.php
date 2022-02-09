<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\BusDetailsController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RouteController;
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
//Bus Management
Route::get('add-bus',[BusController::class, 'addBus'])->name('admin.addBus');
Route::get('get-bus',[BusController::class, 'getBus'])->name('admin.getBus');
Route::get('edit-bus',[BusController::class, 'editBus'])->name('admin.editBus');

//Operator Management
Route::get('add-Operator',[OperatorController::class, 'addOperator'])->name('admin.addOperator');
Route::get('get-Operator',[OperatorController::class, 'getOperator'])->name('admin.getOperator');
Route::get('edit-Operator',[OperatorController::class, 'editOperator'])->name('admin.editOperator');

//Route Management
Route::get('add-route',[RouteController::class, 'addRoute'])->name('admin.addRoute');
Route::get('get-route',[RouteController::class, 'getRoute'])->name('admin.getRoute');
Route::get('edit-route',[RouteController::class, 'editRoute'])->name('admin.editRoute');

//user Management
Route::get('get-users',[EditUserController::class, 'getUsers'])->name('admin.getUsers');
Route::get('edit-Users',[EditUserController::class, 'editUser'])->name('admin.editUsers');



//Middleware Auth sanctum routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
