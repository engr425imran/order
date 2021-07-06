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

Route::view('/', 'auth.login');
Route::view('/landing', 'landing');
Auth::routes();
Route::resource('pays', PayController::class);
Route::post('savePaySlip', [PayController::class, 'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('admin', 'admin.admin');