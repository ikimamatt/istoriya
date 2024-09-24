<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login_proses',[LoginController::class,'login_proses'])->name('login_proses');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

route::group(['prefix' => 'admin','middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/ordering', [HomeController::class, 'ordering'])->name('ordering');
    // Route::get('/table', [HomeController::class, 'index'])->name('index');
    // Route::post('/store', [HomeController::class, 'store'])->name('store');
    // Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
    // Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('delete');

});

