<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

    // Product Routes
    Route::get('/produk', [ProductController::class, 'index'])->name('produk');                  // Show all products
    Route::get('/produk/tambah', [ProductController::class, 'create'])->name('addproduk');        // Show form to add a new product
    Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');            // Store a new product
    Route::get('/produk/edit/{id}', [ProductController::class, 'edit'])->name('editproduk');      // Show form to edit a product
    Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');      // Update a product
    Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.delete');  // Delete a product
    // Route::get('/produk', function () {
    //     return view('admin.produk');  // Menampilkan halaman produk.blade.php di folder admin
    // })->name('produk');

    // Route::get('/addproduk', function () {
    //     return view('admin.addproduk');  // Menampilkan halaman produk.blade.php di folder admin
    // })->name('addproduk');

    // Route::get('/editproduk', function () {
    //     return view('admin.editproduk');  // Menampilkan halaman produk.blade.php di folder admin
    // })->name('editproduk');

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


});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/katalog', [HomeController::class, 'showProduct'])->name('katalog');


Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/shopping-cart', function () {
    return view('shopping-cart');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/success', function () {
    return view('success');
});

// Route::get('/katalog', function () {
//     return view('katalog');
// })->name('katalog');

Route::get('/admin.produk', function () {
    return view('admin.produk');
});

