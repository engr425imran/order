<?php

use App\Models\Leave;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeaveController;

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
Route::get('/login',[HomeController::class, 'login'])->middleware('guest');
// Route::view('/', 'auth.login');
Route::view('/', 'landing');
Auth::routes();
Route::resource('leaves', LeaveController::class);
Route::resource('pays', PayController::class);
Route::post('savePaySlip', [PayController::class, 'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('admin', 'admin.admin');

Route::get('approveLeave/{id}', [LeaveController::class ,'approveleave']);
Route::get('/check', function(){
    $leaves=App\Models\Leave::where('email', auth()->user()->email)->get();
    foreach($leaves as $leave){
        if(!$leave->status){
        echo $leave->type;
        }
    }

});
  