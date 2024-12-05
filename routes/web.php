<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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
Route::post('/login_proses', [LoginController::class, 'login_proses'])->name('login_proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    // Product Routes
    Route::get('/produk', [ProductController::class, 'index'])->name('produk');                  // Show all products
    Route::get('/produk/tambah', [ProductController::class, 'create'])->name('addproduk');        // Show form to add a new product
    Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');            // Store a new product
    Route::get('/produk/edit/{id}', [ProductController::class, 'edit'])->name('editproduk');      // Show form to edit a product
    Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');      // Update a product
    Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.delete');  // Delete a product

    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/admin/orders/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::post('/admin/orders/{id}/update', [OrderController::class, 'update'])->name('orders.update');
    Route::delete('/admin/orders/{id}/delete', [OrderController::class, 'destroy'])->name('orders.delete');
    Route::get('/datasales', function () {
        return view('admin.datasales');  // Menampilkan halaman produk.blade.php di folder admin
    })->name('datasales');

    Route::get('/detailsales', function () {
        return view('admin.detailsales');  // Menampilkan halaman produk.blade.php di folder admin
    })->name('detailsales');

    Route::get('/readcompro', function () {
        return view('admin.readcompro');  // Menampilkan halaman produk.blade.php di folder admin
    })->name('readcompro');

    Route::get('/editcompro', function () {
        return view('admin.editcompro');  // Menampilkan halaman produk.blade.php di folder admin
    })->name('editcompro');

    Route::resource('profiles', ProfileController::class);
    Route::put('/admin/orders/{order}', [OrderController::class, 'updateOrderWithProducts'])->name('orders.updateWithProducts');

});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/katalog', [HomeController::class, 'showProduct'])->name('katalog');
Route::get('/shop', [HomeController::class, 'showShop'])->name('shop');
Route::post('/add-to-cart', [OrderController::class, 'addToCart'])->name('order.addToCart');
Route::get('/shopping-cart', [OrderController::class, 'viewCart'])->name('order.viewCart');


Route::post('/save-order-details', [OrderController::class, 'saveOrderDetails'])->name('order.saveOrderDetails');
Route::get('/payment', [OrderController::class, 'paymentPage'])->name('order.paymentPage');
Route::post('/process-payment', [OrderController::class, 'processPayment'])->name('order.processPayment');
Route::get('/success', [OrderController::class, 'successPage'])->name('order.successPage');

Route::get('/session-clear', [OrderController::class, 'clearSession'])->name('session.clear');
Route::post('/cart/remove', [OrderController::class, 'removeItem'])->name('cart.removeItem');



