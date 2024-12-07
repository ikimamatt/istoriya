<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .receipt { max-width: 400px; margin: 0 auto; border: 1px solid #ddd; padding: 20px; border-radius: 5px; }
        .receipt h2 { text-align: center; }
        .receipt img { display: block; margin: 0 auto; width: 100px; /* Adjust size here */ }
        .receipt .details, .receipt .products { margin-bottom: 20px; }
        .receipt .products table { width: 100%; border-collapse: collapse; }
        .receipt .products table th, .receipt .products table td { border: 1px solid #ddd; padding: 5px; text-align: left; }
    </style>
</head>
<body>
    <div class="receipt">
        <h2>Struk Pembelian</h2>
        <img src="{{ asset('assets/images/logos/logo1.png') }}" alt="Logo">
        <div class="details">
            <p><strong>Kode Order:</strong> {{ $order->order_code }}</p>
            <p><strong>Nama:</strong> {{ $order->user_name }}</p>
            <p><strong>Telepon:</strong> {{ $order->phone }}</p>
            <p><strong>Alamat:</strong> {{ $order->address }}</p>
            <p><strong>Metode Pengambilan:</strong> {{ ucfirst($order->pickup_method) }}</p>
        </div>

        <div class="products">
            <h4>Produk</h4>
            <table>
                <thead>
                    <tr>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->products as $product)
                        <tr>
                            <td>{{ $product->product_name }}</td>
                            <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>Rp{{ number_format($product->price * $product->quantity, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <h4>Total: <strong>Rp{{ number_format($order->total, 0, ',', '.') }}</strong></h4>
        <p style="text-align: center;">Terima kasih atas pembelian Anda!</p>
    </div>
</body>
</html>
