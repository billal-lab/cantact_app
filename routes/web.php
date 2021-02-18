<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Cantact\cantactController;
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
Route::get('/logout',[loginController::class, 'logout'])->name("login_logout");
Route::get('/login',[loginController::class, 'index'])->name("login_index");
Route::post('/login',[loginController::class, 'login'])->name("login_login");

Route::get('/admin',[adminController::class,'index'])->name("admin_index");

Route::get('/',[cantactController::class,'index'])->name("cantact_index");
Route::post('/',[cantactController::class,'store'])->name("cantact_store");
Route::delete('/{cantact}', [cantactController::class, 'destroy'])->name('cantact.destroy');


