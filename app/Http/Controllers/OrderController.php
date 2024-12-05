<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
      // List semua order
      public function index()
      {
          $orders = Order::with('products')->get();
          return view('admin.ordering', compact('orders'));
      }

      // Lihat detail order
      public function show($id)
      {
          $order = Order::with('products')->findOrFail($id);
          return view('admin.orders.show', compact('order'));
      }

      // Update order (seperti status atau data lainnya)
      public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $order->update([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'pickup_method' => $request->pickup_method,
            'total' => $request->total,
        ]);

        return redirect()->route('admin.orders.index')->with('success', 'Order updated successfully.');
    }

      // Hapus order
      public function destroy($id)
      {
          $order = Order::findOrFail($id);
          $order->delete();

          return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully');
      }
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);

        $productId = $request->product_id;

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $request->quantity;
            $cart[$productId]['note'] = $request->note;
        } else {
            $cart[$productId] = [
                'id' => $productId,
                'name' => $request->product_name,
                'price' => $request->product_price,
                'image' => $request->product_image,
                'quantity' => $request->quantity,
                'note' => $request->note,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->route('order.viewCart');
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('shopping-cart', compact('cart'));
    }

    public function saveOrderDetails(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'notelp' => 'required|numeric',
            'alamat' => 'required|string',
            'pickup_method' => 'required|in:ambil_sendiri,diantar',
        ]);
        $userDetails = [
            'name' => $request->nama,
            'email' => $request->email,
            'phone' => $request->notelp,
            'address' => $request->alamat,
            'pickup_method' => $request->pickup_method,
        ];

        session()->put('user_details', $userDetails);
        return redirect()->route('order.paymentPage');
    }

    public function paymentPage()
    {
        $cart = session()->get('cart', []);
        $userDetails = session()->get('user_details', []);
        $total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        return view('payment', compact('cart', 'userDetails', 'total'));
    }

    public function processPayment(Request $request)
    {
        $cart = session()->get('cart', []);
        $userDetails = session()->get('user_details', []);

        if (!$cart || !$userDetails) {
            return redirect()->route('order.viewCart')->with('error', 'Keranjang atau detail pengguna tidak valid.');
        }

        $order = new Order();
        $order->user_name = $userDetails['name'];
        $order->email = $userDetails['email'];
        $order->phone = $userDetails['phone'];
        $order->address = $userDetails['address'];
        $order->pickup_method = $userDetails['pickup_method'];
        $order->total = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));
        $order->order_code = 'ORD-' . strtoupper(uniqid());
        $order->save();

        foreach ($cart as $item) {
            $order->products()->create([
                'product_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'note' => $item['note'],
            ]);
        }

        if ($request->hasFile('payment_proof')) {
            $path = $request->file('payment_proof')->store('payments', 'public');
            $order->payment_proof = $path;
            $order->save();
        }

        session()->forget(['cart', 'user_details']);
        return redirect()->route('order.successPage')->with('order_code', $order->order_code);
    }

    public function successPage()
    {
        $orderCode = session()->get('order_code');
        return view('success', compact('orderCode'));
    }

    public function clearSession()
    {
        // Menghapus semua session
        session()->flush();

        // Redirect ke halaman tertentu, misalnya ke halaman utama
        return redirect('/shop')->with('message', 'Session berhasil dihapus.');
    }
    public function updateOrderWithProducts(Request $request, $id)
{
    $order = Order::with('products')->findOrFail($id);

    // Validasi data order
    $request->validate([
        'user_name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:15',
        'address' => 'required|string|max:255',
        'pickup_method' => 'required|in:ambil_sendiri,diantar',
        'total' => 'required|numeric|min:0',
    ]);

    // Update data order
    $order->update([
        'user_name' => $request->user_name,
        'email' => $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'pickup_method' => $request->pickup_method,
        'total' => $request->total,
    ]);

    // Validasi dan update produk
    foreach ($request->products as $productId => $productData) {
        $product = $order->products()->findOrFail($productId);
        $product->update([
            'product_name' => $productData['product_name'],
            'price' => $productData['price'],
            'quantity' => $productData['quantity'],
            'note' => $productData['note'] ?? null,
        ]);
    }

    return redirect()->route('admin.orders.index')->with('success', 'Order and products updated successfully.');
}

}
