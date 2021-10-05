<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\productController;
use  App\Http\Controllers\customersController;
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
//Product routes
Route::get('/product/create',[productController::class,'Create'])->name('product.create');
Route::post('/product/create',[productController::class,'createSubmit'])->name('product.create');
Route::get('/product/list',[productController::class,'list'])->name('product.list');
Route::get('/product/edit/{id}/{name}',[productController::class,'edit']);
Route::post('/product/edit',[productController::class,'editSubmit'])->name('product.edit');
Route::get('/product/delete/{id}/{name}',[productController::class,'delete']);

//Customer routes
Route::get('/customer/login',[customersController::class,'Login'])->name('customer.login');
Route::post('/customer/login',[customersController::class,'loginSubmit'])->name('customer.login');
Route::get('/customer/validate',[customersController::class,'loginSubmit'])->name('customer.validate');
Route::get('/customer/plist',[customersController::class,'plist'])->name('customer.plist');
