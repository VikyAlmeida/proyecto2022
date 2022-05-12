<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminController;

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

Route::get('/', [welcomeController::class ,"index"])->name("index");
Route::get('/como-llegar', [welcomeController::class ,"como_llegar"])->name("como_llegar");

Route::post('/customers', [CustomerController::class ,"create"])->name("create.customer");

Route::get('/como-llegar', [welcomeController::class ,"como_llegar"])->name("como_llegar");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(["auth","admin"])->prefix("/admin")->namespace("Admin")->group(function(){
    Route::get('/', [AdminController::class ,"index"])->name("admin.index");

    Route::get('/customers/aceptados', [UserController::class ,"customers_accept"])->name("admin.accept");
    Route::get('/customers/banneados', [UserController::class ,"customers_cancel"])->name("admin.ban");
    Route::get('/customers/cancelados', [UserController::class ,"customers_ban"])->name("admin.cancel");
    Route::get('/customers', [UserController::class ,"customers"])->name("admin.customer");
    Route::get('/request', [UserController::class ,"request"])->name("admin.request");
    Route::post('/request', [UserController::class ,"accept"])->name("admin.accept.customer");
    
});