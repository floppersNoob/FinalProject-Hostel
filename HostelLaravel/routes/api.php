<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HostelController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;


<<<<<<< HEAD
=======

>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


<<<<<<< HEAD
Route::get('/get-rooms', [HostelController::class, 'index']);   
Route::post('/add-rooms', [HostelController::class, 'store']);     
Route::put('/store-rooms/{id}', [HostelController::class, 'update']); 
=======
Route::get('/rooms', [HostelController::class, 'index']);   
Route::post('/rooms', [HostelController::class, 'store']);     
Route::get('/rooms/{id}', [HostelController::class, 'show']);  
Route::put('/rooms/{id}', [HostelController::class, 'update']); 
// Route::delete('/rooms/{id}', [HostelController::class, 'destroy']);
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
Route::put('/rooms/{id}/archive', [HostelController::class, 'archive']);
Route::get('/rooms/archived/list', [HostelController::class, 'archived']);
Route::put('/rooms/recover/{id}', [HostelController::class, 'recover']);


<<<<<<< HEAD
Route::get('/get-customers', [CustomerController::class, 'index']);
Route::post('/add-customers', [CustomerController::class, 'store']);
Route::put('/put-customers/{id}', [CustomerController::class, 'update']);


Route::get('/get-payments', [PaymentController::class, 'index']);
Route::post('/add-payments', [PaymentController::class, 'store']);

=======
Route::get('/customers', [CustomerController::class, 'index']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::get('/customers/{id}', [CustomerController::class, 'show']);
// Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);
Route::put('/customers/{id}', [CustomerController::class, 'update']);


Route::post('/payments', [PaymentController::class, 'store']);
Route::get('/payments', [PaymentController::class, 'index']);
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3



