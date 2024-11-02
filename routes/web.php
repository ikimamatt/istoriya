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
    Route::get('/produk', function () {
        return view('admin.produk');  // Menampilkan halaman produk.blade.php di folder admin
    })->name('produk');

    Route::get('/addproduk', function () {
        return view('admin.addproduk');  // Menampilkan halaman produk.blade.php di folder admin
    })->name('addproduk');

    Route::get('/editproduk', function () {
        return view('admin.editproduk');  // Menampilkan halaman produk.blade.php di folder admin
    })->name('editproduk');

    // Route::get('/produk', [HomeController::class, 'produk'])->name('produk');
    // Route::get('/table', [HomeController::class, 'index'])->name('index');
    // Route::post('/store', [HomeController::class, 'store'])->name('store');
    // Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
    // Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('delete');

});

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/shopping-cart', function () {
    return view('shopping-cart');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/admin.produk', function () {
    return view('admin.produk');
});

