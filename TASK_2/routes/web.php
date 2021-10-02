<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
    return view('/page/login');
});
Route::get('login', [PageController::class, 'loginPage'])->name('login');
Route::post('submit-login', [PageController::class, 'loginButton'])->name('login.post'); 
Route::get('registration', [PageController::class, 'registrationPage'])->name('register');
Route::post('submit-registration', [PageController::class, 'registerButton'])->name('register.post'); 
Route::get('contact', [PageController::class, 'contact'])->name('contact');

