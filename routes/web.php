<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\CustomLoginController;
use App\Http\Controllers\BrandController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('home');
});

Route::get('/login', [CustomLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [CustomLoginController::class, 'login'])->name('custom.login');

Route::middleware(['auth.admin'])->group(function () {
    // Your protected routes go here
    Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
    Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
});

