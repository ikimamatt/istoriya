<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\Profile;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function ordering()
    {
        return view('admin.ordering');
    }

    public function index()
    {
        $profiles = Profile::firstOrFail();
        return view('home', compact('profiles'));
    }

    public function showProduct()
    {
        $products = Product::all();
        return view('katalog', compact('products'));
    }
    public function showShop()
    {
        // Mengambil produk dengan field 'preorder' bernilai 'ready'
        $products = Product::where('preorder', 'ready')->get();
        return view('shop', compact('products'));
    }
    public function addToCart(Request $request)
    {
        // Simpan data produk ke session
        $cart = session()->get('cart', []);
        $cart[] = [
            'id' => $request->product_id,
            'name' => $request->product_name,
            'price' => $request->product_price,
            'quantity' => $request->quantity,
            'image' => $request->product_image,
            'note' => $request->note ?? '',
        ];
        session(['cart' => $cart]);

        // Arahkan ke halaman konfirmasi pesanan
        return redirect()->route('show-cart');
    }
    public function removeFromCart($index)
    {
        $cart = session()->get('cart', []);

        // Pastikan item dengan indeks ada
        if (isset($cart[$index])) {
            // Hapus item dari cart
            unset($cart[$index]);

            // Perbaiki indeks array agar urut kembali
            $cart = array_values($cart);  // Re-index array

            // Simpan kembali cart ke session
            session(['cart' => $cart]);
        }

        // Flash pesan sukses
        return redirect()->route('show-cart')->with('success', 'Item berhasil dihapus dari keranjang.');
    }


    public function showCart()
    {
        // Ambil data dari session
        $cart = session('cart', []);

        // Hitung total harga
        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        return view('shopping-cart', compact('cart', 'total'));
    }


    public function checkout(Request $request)
    {
        // Validasi input
        dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string',
            'notelp' => 'required|string',
            'alamat' => 'required|string',
            'time' => 'required|in:ambil_sendiri,diantaar',
        ]);

        // Perhitungan total
        $cart = session('cart', []); // Ambil data keranjang dari session
        $total = array_reduce($cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);

        // Simpan data ke session
        $validatedData['total'] = $total; // Tambahkan total ke data validasi
        session(['order' => $validatedData]);

        // Redirect ke halaman payment
        return redirect()->route('payment');
    }


    public function payment()
    {
        // Ambil data dari session
        $order = session('order');

        if (!$order) {
            return redirect()->route('show-cart')->with('error', 'Pesanan tidak ditemukan.');
        }

        return view('payment', compact('order'));
    }

    public function storePayment(Request $request)
    {
        // Validasi unggahan bukti pembayaran
        $validatedData = $request->validate([
            'bukti_transaksi' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Ambil data pesanan dari session
        $orderData = session('order');
        if (!$orderData) {
            return redirect()->route('home')->with('error', 'Pesanan tidak ditemukan.');
        }

        // Simpan file gambar
        $buktiPath = $request->file('bukti_transaksi')->store('bukti_transaksi', 'public');

        // Simpan data ke database
        $order = new Order();
        $order->nama = $orderData['nama'];
        $order->email = $orderData['email'];
        $order->notelp = $orderData['notelp'];
        $order->alamat = $orderData['alamat'];
        $order->metode_pengambilan = $orderData['time'];
        $order->bukti_transaksi = $buktiPath;
        $order->total = $orderData['total']; // Simpan total harga
        $order->save();

        // Hapus session
        session()->forget(['order', 'cart']);

        return redirect()->route('home')->with('success', 'Pesanan berhasil disimpan!');
    }
}
