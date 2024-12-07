<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset("assets/images/logos/favicon.png") }}" />
  <link rel="stylesheet" href="{{ asset("assets/css/styles.min.css") }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .receipt { max-width: 600px; margin: 0 auto; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
        .receipt h1 { text-align: center; font-style: bold; color: #333; }
        .receipt img { display: block; margin: 0 auto; width: 100px; /* Adjust size here */ }
        .receipt .details, .receipt .products { margin-bottom: 20px; }
        .receipt .products table { width: 100%; border-collapse: collapse; }
        .receipt .products table th, .receipt .products table td { padding: 8px; text-align: left; }
        .receipt .products table th { background-color: #f8f9fa; }
        .receipt .footer { text-align: center; margin-top: 30px; font-size: 1.1rem; }
    </style>
</head>
<body>
    <div class="receipt border border-light">
        <h1 class="text-primary text-center text-bold">ISTORIYA CAFE</h1>
        <h3 class="text-center">Struk Kasir</h3>
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
            <table class="table table-bordered">
                <thead class="table-light">
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
        <p class="footer">Terima kasih atas pembelian Anda!</p>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session()->has('success'))
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonText: 'OK'
    });
</script>
@endif
<script>
    document.getElementById('logout-btn').addEventListener('click', function () {
      Swal.fire({
        title: 'Konfirmasi Logout',
        text: "Apakah Anda yakin ingin keluar?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Keluar',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {
          // Redirect ke route logout jika dikonfirmasi
          window.location.href = "{{ route('logout') }}";
        }
      });
    });
  </script>

@if(session()->has('error'))
<script>
    Swal.fire({
        title: 'Gagal!',
        text: '{{ session('error') }}',
        icon: 'error',
        confirmButtonText: 'OK'
    });
</script>
@endif
</body>

</html>
