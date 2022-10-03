<?php

use App\Http\Controllers\{LoginController, EmployeeController, RegisterController, LogoutController};
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

// Register Route
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Login Route
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

// logout route
Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth')->name('logout');

// crud route
Route::get('/dashboard', [EmployeeController::class, 'index'])->middleware('auth');
Route::get('/create', [EmployeeController::class, 'create'])->middleware('auth');
Route::post('/store', [EmployeeController::class, 'store'])->middleware('auth');
Route::get('/edit/{id}', [EmployeeController::class,'edit'])->middleware('auth');
Route::put('/edit/{id}', [EmployeeController::class,'update'])->middleware('auth');
Route::delete('/edit/{id}', [EmployeeController::class,'destroy'])->middleware('auth');
