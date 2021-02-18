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

//partie admins

Route::get('/logout',[loginController::class, 'logout'])->name("login_logout")->middleware('auth'); // pour la deconnexion
Route::get('/login',[loginController::class, 'index'])->name("login_index");  // pour afficher le formulaire de connection
Route::post('/login',[loginController::class, 'login'])->name("login_login"); // pour s'authentifier

Route::get('/admin',[adminController::class,'index'])->name("admin_index")->middleware('auth'); // afficher le dashboard de l'admin
Route::delete('/{cantact}', [cantactController::class, 'destroy'])->name('cantact_destroy')->middleware('auth'); // supprimer un cantact
Route::get('/{cantact}', [cantactController::class, 'editDisplay'])->name('cantact_display_edit')->middleware('auth'); // afficher le fomulaire pour editer un cantact
Route::put('/{cantact}', [cantactController::class, 'edit'])->name('cantact_edit')->middleware('auth'); // enregistrer les modification apportés au cantact dans la bd 


//partie visiteur

Route::get('/',[cantactController::class,'index'])->name("cantact_index"); // afficher le formulaire de cantact pour l'utilisateur
Route::post('/',[cantactController::class,'store'])->name("cantact_store"); // enregistrer le formulaire de cantact pour l'utilisateur dans la bd

