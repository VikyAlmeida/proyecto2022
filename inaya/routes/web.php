<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\EventController;

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
Route::get('/ZonaCliente', [CustomerController::class, 'index'])->name('cliente.index');

Route::middleware(["auth","admin"])->prefix("/admin")->namespace("Admin")->group(function(){
    Route::get('/', [AdminController::class ,"index"])->name("admin.index");

    Route::get('/customers/aceptados', [UserController::class ,"customers_accept"])->name("admin.accept");
    Route::get('/customers/banneados', [UserController::class ,"customers_cancel"])->name("admin.ban");
    Route::get('/customers/cancelados', [UserController::class ,"customers_ban"])->name("admin.cancel");
    Route::get('/customers', [UserController::class ,"customers"])->name("admin.customer");
    Route::get('/request', [UserController::class ,"request"])->name("admin.request");
    Route::post('/request', [UserController::class ,"accept"])->name("admin.accept.customer");
    
    Route::get('/events', [EventController::class ,"index"])->name("admin.events.index");
    Route::get('/events/create', [EventController::class ,"create"])->name("admin.events.create");
    Route::get('/events/edit/{event}', [EventController::class ,"edit"])->name("admin.events.edit");
    Route::post('/events/edit', [EventController::class ,"update"])->name("admin.events.update");
    Route::post('/events/create', [EventController::class ,"store"])->name("admin.events.store");
    Route::delete('/events', [EventController::class ,"destroy"])->name("admin.events.destroy");
});