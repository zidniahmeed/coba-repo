<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChangePasswordController;

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

Auth::routes();

Route::get('change-password', [ChangePasswordController::class,'index']);
Route::post('change-password',[ChangePasswordController::class,'store'])->name('change.password');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
