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
use App\Models\Seat;
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

Route::get('/bus-details/{bus_id}',[BusDetailsController::class, 'index'])->name('busDetails');

Route::get('/payment',[InvoiceController::class, 'index'])->name('payment');
Route::get('/payment-details',[InvoiceController::class, 'paymentDetails'])->name('paymentDetails');

Route::get('ticket',[TicketController::class, 'ticket'])->name('ticket');

//seat routes
Route::get('/add-seat/{bus_id}',[SeatController::class, 'addSeat'])->name('addSeat');
Route::post('create-seat',[SeatController::class, 'createSeat'])->name('seat');
Route::get('cancel-seat/{seat_id}',[SeatController::class, 'cancelSeat'])->name('cancelSeat');


//Admin Routes
//Bus Management
Route::get('add-bus',[BusController::class, 'addBus'])->name('admin.addBus');
Route::post('create-bus',[BusController::class, 'createBus'])->name('admin.createBus');
Route::get('get-bus',[BusController::class, 'getBus'])->name('admin.getBus');
Route::get('edit-bus/{bus_id}',[BusController::class, 'editBus'])->name('admin.editBus');
Route::post('update-bus', [BusController::class, 'updateBus'])->name('admin.updateBus');
Route::get('delete-bus/{bus_id}',[BusController::class, 'deleteBus'])->name('admin.deleteBus');

//Operator Management
Route::get('add-Operator',[OperatorController::class, 'addOperator'])->name('admin.addOperator');
Route::post('create-Operator',[OperatorController::class, 'createOperator'])->name('admin.createOperator');
Route::get('get-Operator',[OperatorController::class, 'getOperator'])->name('admin.getOperator');
Route::get('edit-Operator/{operator_id}',[OperatorController::class, 'editOperator'])->name('admin.editOperator');
Route::post('update-operator',[OperatorController::class, 'updateOperator'])->name('admin.updateOperator');
Route::get('delete-Operator/{operator_id}',[OperatorController::class, 'deleteOperator'])->name('admin.deleteOperator');

//Route Management
Route::get('add-route',[RouteController::class, 'addRoute'])->name('admin.addRoute');
Route::post('create-route',[RouteController::class, 'createRoute'])->name('admin.createRoute');
Route::get('get-route',[RouteController::class, 'getRoute'])->name('admin.getRoute');
Route::get('edit-route/{route_id}',[RouteController::class, 'editRoute'])->name('admin.editRoute');
Route::post('update-route',[RouteController::class, 'updateRoute'])->name('admin.updateRoute');
Route::get('delete-route/{route_id}',[RouteController::class, 'deleteRoute'])->name('admin.deleteRoute');

//user Management
Route::get('get-users',[EditUserController::class, 'getUsers'])->name('admin.getUsers');
Route::get('edit-Users/{id}',[EditUserController::class, 'editUser'])->name('admin.editUsers');
Route::post('update-user',[EditUserController::class, 'updateUser'])->name('admin.updateUser');

//payment management
Route::get('payment/{seat_id}',[SeatController::class, 'goToPayment'])->name('user.payment');


//Middleware Auth sanctum routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
