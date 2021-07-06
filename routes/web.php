<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;

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

Route::view('/', 'landing');
// Route::get('getPayrollView', [PayController::class, 'index']);
Route::get('createPaySlips', [PayController::class, 'create']);
Auth::routes();
Route::resource('pays', PayController::class);
Route::post('savePaySlip', [PayController::class, 'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
