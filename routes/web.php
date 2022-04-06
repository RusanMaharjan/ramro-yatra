<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\BusDetailsController;
use App\Http\Controllers\EditUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\TicketController;
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

//User Routes
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth', 'verified');
Route::get('/search-bus', [HomeController::class, 'searchBus'])->name('searchBus')->middleware('auth', 'verified');

Route::get('/bus-details/{bus_id}',[BusDetailsController::class, 'index'])->name('busDetails')->middleware('auth', 'verified');

//seat routes
Route::get('/add-seat/{bus_id}',[SeatController::class, 'addSeat'])->name('addSeat')->middleware('auth', 'verified');
Route::post('create-seat',[SeatController::class, 'createSeat'])->name('seat')->middleware('auth', 'verified');
Route::get('cancel-seat/{seat_id}',[SeatController::class, 'cancelSeat'])->name('cancelSeat')->middleware('auth', 'verified');


//Admin Routes
//Bus Management
Route::get('add-bus',[BusController::class, 'addBus'])->name('admin.addBus')->middleware('authadmin');
Route::post('create-bus',[BusController::class, 'createBus'])->name('admin.createBus')->middleware('authadmin');
Route::get('get-bus',[BusController::class, 'getBus'])->name('admin.getBus')->middleware('authadmin');
Route::get('edit-bus/{bus_id}',[BusController::class, 'editBus'])->name('admin.editBus')->middleware('authadmin');
Route::post('update-bus', [BusController::class, 'updateBus'])->name('admin.updateBus')->middleware('authadmin');
Route::get('delete-bus/{bus_id}',[BusController::class, 'deleteBus'])->name('admin.deleteBus')->middleware('authadmin');

//Operator Management
Route::get('add-Operator',[OperatorController::class, 'addOperator'])->name('admin.addOperator')->middleware('authadmin');
Route::post('create-Operator',[OperatorController::class, 'createOperator'])->name('admin.createOperator')->middleware('authadmin');
Route::get('get-Operator',[OperatorController::class, 'getOperator'])->name('admin.getOperator')->middleware('authadmin');
Route::get('edit-Operator/{operator_id}',[OperatorController::class, 'editOperator'])->name('admin.editOperator')->middleware('authadmin');
Route::post('update-operator',[OperatorController::class, 'updateOperator'])->name('admin.updateOperator')->middleware('authadmin');
Route::get('delete-Operator/{operator_id}',[OperatorController::class, 'deleteOperator'])->name('admin.deleteOperator')->middleware('authadmin');

//Route Management
Route::get('add-route',[RouteController::class, 'addRoute'])->name('admin.addRoute')->middleware('authadmin');
Route::post('create-route',[RouteController::class, 'createRoute'])->name('admin.createRoute')->middleware('authadmin');
Route::get('get-route',[RouteController::class, 'getRoute'])->name('admin.getRoute')->middleware('authadmin');
Route::get('edit-route/{route_id}',[RouteController::class, 'editRoute'])->name('admin.editRoute')->middleware('authadmin');
Route::post('update-route',[RouteController::class, 'updateRoute'])->name('admin.updateRoute')->middleware('authadmin');
Route::get('delete-route/{route_id}',[RouteController::class, 'deleteRoute'])->name('admin.deleteRoute')->middleware('authadmin');

//user Management
Route::get('get-users',[EditUserController::class, 'getUsers'])->name('admin.getUsers')->middleware('authadmin');
Route::get('edit-Users/{id}',[EditUserController::class, 'editUser'])->name('admin.editUsers')->middleware('authadmin');
Route::post('update-user',[EditUserController::class, 'updateUser'])->name('admin.updateUser')->middleware('authadmin');

//payment management
Route::get('payment/{seat_id}',[SeatController::class, 'goToPayment'])->name('user.payment')->middleware('auth', 'verified');
Route::post('/create-payment',[InvoiceController::class, 'createPayment'])->name('createPayment')->middleware('auth', 'verified');
Route::get('/payment-details',[InvoiceController::class, 'paymentDetails'])->name('paymentDetails')->middleware('auth', 'verified');

//ticket management
Route::get('/getTicket/{invoice_id}', [TicketController::class,'index'])->name('user.ticket')->middleware('auth', 'verified');

//Middleware Auth sanctum routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
