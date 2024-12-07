<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.produk', compact('products'));
    }

    // Show the form for creating a new product
    public function create()
    {
        return view('admin.addproduk');
    }

    // Store a newly created product in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'categories' => 'required|string|max:255',
            'stock' => 'required|numeric',
            'preorder' => 'required|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Product::create([
            'product_id' => Product::generateProductId(),
            'name' => $request->name,
            'price' => $request->price,
            'categories' => $request->categories,
            'image_path' => $imagePath,
            'stock' => $request->stock,
            'preorder' => $request->preorder,
        ]);

        return redirect()->route('admin.produk')->with('success', 'Produk Berhasil Ditambahkan!');
    }

    // Show the form for editing the specified product
    public function edit($id)
    {
        $product = Product::findOrFail($id);  // Ambil data produk berdasarkan ID
        return response()->json($product);    // Mengembalikan data produk dalam format JSON
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);  // Cari produk berdasarkan ID

        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'categories' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar (opsional)
            'stock' => 'required|numeric',
            'preorder' => 'required|string|max:255',
        ]);

        // Update nama dan harga produk
        $product->name = $request->name;
        $product->price = $request->price;
        $product->categories = $request->categories;
        $product->stock = $request->stock;
        $product->preorder = $request->preorder;

        // Jika ada gambar baru, upload dan update path gambar
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($product->image_path) {
                Storage::delete('public/' . $product->image_path);
            }
            // Simpan gambar baru dan ambil path-nya
            $imagePath = $request->file('image')->store('images', 'public');
            $product->image_path = $imagePath;
        }

        // Simpan perubahan data produk
        $product->save();

        // Kembalikan response ke halaman produk dengan pesan sukses
        return redirect()->route('admin.produk')->with('success', 'Produk berhasil diperbarui!');
    }

    // Remove the specified product from storage
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.produk')->with('success', 'Produk Berhasil Dihapus!');
    }
}
