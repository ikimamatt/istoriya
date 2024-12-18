@extends('admin.layout.partial')
@section('admin')
<div class="container-fluid">
<div class="row">
  <div class="col-lg d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <div
          class="d-flex mb-4 justify-content-between align-items-center"
        >
          <h5 class="mb-0 fw-bold">Order</h5>

          <div class="dropdown">
            <button
              id="dropdownMenuButton1"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              class="rounded-circle btn-transparent rounded-circle btn-sm px-1 btn shadow-none"
            >
              <i class="ti ti-dots-vertical fs-7 d-block"></i>
            </button>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="dropdownMenuButton1"
            >
              <li><a class="dropdown-item" href="{{ route('admin.incomeReport') }}">Rekap Pemasukan</a></li>
              </li>
            </ul>
          </div>
        </div>

        <div class="table-responsive" data-simplebar>
          <table class="table table-borderless align-middle text-nowrap">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Order</th>
                <th scope="col">Pelanggan</th>
                <th scope="col">Total</th>
                <th scope="col">Metode Pengambilan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="fs-3 fw-normal mb-0">{{ $loop->iteration }}</td>
                        <td class="fs-3 fw-normal mb-0 text-success">{{ $order->order_code }}</td>
                        <td class="fs-3 fw-normal mb-0">{{ $order->user_name }}</td>
                        <td class="fs-3 fw-normal mb-0">Rp{{ number_format($order->total, 0, ',', '.') }}</td>
                        <td class="fs-3 fw-normal mb-0">{{ ucfirst($order->pickup_method) }}</td>
                        <td class="fs-3 fw-normal mb-0">
                            <!-- Button to trigger modal -->
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#orderModal{{ $order->id }}">
                                Lihat/Edit
                            </button>
                            <form action="{{ route('admin.orders.delete', $order->id) }}" method="POST" class="d-inline-block" id="deleteForm{{ $order->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm delete-btn" data-id="{{ $order->id }}">Hapus</button>
                            </form>
                        </td>

                        <!-- Modal -->
                        <div class="modal fade" id="orderModal{{ $order->id }}" tabindex="-1" aria-labelledby="orderModalLabel{{ $order->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <form action="{{ route('admin.orders.updateWithProducts', $order->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header bg-light">
                                            <h5 class="modal-title fw-bold" id="orderModalLabel{{ $order->id }}">
                                                Edit Order - #{{ $order->order_code }}
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Data Order -->
                                            <h5 class="fw-bold">Detail Order</h5>
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="user_name" class="form-label">Nama</label>
                                                    <input disabled type="text" class="form-control" id="user_name" name="user_name" value="{{ $order->user_name }}" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="phone" class="form-label">No telepon</label>
                                                    <input disabled type="text" class="form-control" id="phone" name="phone" value="{{ $order->phone }}" required>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="pickup_method" class="form-label">Metode Pengambilan</label>
                                                    <select class="form-select" id="pickup_method" name="pickup_method" required>
                                                        <option value="ambil_sendiri" {{ $order->pickup_method == 'ambil_sendiri' ? 'selected' : '' }}>Ambil Sendiri</option>
                                                        <option value="diantar" {{ $order->pickup_method == 'diantar' ? 'selected' : '' }}>Diantar</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <label for="address" class="form-label">Alamat</label>
                                                    <textarea class="form-control" id="address" name="address" rows="3" required>{{ $order->address }}</textarea>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="total" class="form-label">Total</label>
                                                    <input disabled type="number" class="form-control" id="total" name="total" value="{{ $order->total }}" required>
                                                </div>
                                            </div>

                                            <!-- Produk Order -->
                                            <h5 class="fw-bold mt-4">Produk yang dibeli</h5>
                                            @foreach ($order->products as $product)
                                                <div class="border rounded p-3 mb-3">
                                                    <h6 class="fw-bold">Produk #{{ $loop->iteration }}</h6>
                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <label for="product_name_{{ $product->id }}" class="form-label">Nama Produk</label>
                                                            <input disabled type="text" name="products[{{ $product->id }}][product_name]" id="product_name_{{ $product->id }}" class="form-control" value="{{ $product->product_name }}" required>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="price_{{ $product->id }}" class="form-label">Harga</label>
                                                            <input disabled type="number" name="products[{{ $product->id }}][price]" id="price_{{ $product->id }}" class="form-control" value="{{ $product->price }}" required>
                                                        </div>
                                                        <div class="col-md-3 mb-3">
                                                            <label for="quantity_{{ $product->id }}" class="form-label">Jumlah</label>
                                                            <input disabled type="number" name="products[{{ $product->id }}][quantity]" id="quantity_{{ $product->id }}" class="form-control" value="{{ $product->quantity }}" required>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <label for="note_{{ $product->id }}" class="form-label">Catatan</label>
                                                            <textarea name="products[{{ $product->id }}][note]" id="note_{{ $product->id }}" class="form-control" rows="2">{{ $product->note }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            <!-- Payment Proof -->
                                            <h5 class="fw-bold mt-4">Bukti Pembayaran</h5>
                                            <div class="mb-3 text-center">
                                                <label for="payment_proof" class="form-label">Upload Bukti Pembayaran</label>
                                                <div class="mb-3">
                                                    @if ($order->payment_proof)
                                                        <img src="{{ asset('storage/' . $order->payment_proof) }}" alt="Payment Proof" class="img-fluid mb-3" style="max-height: 300px;">
                                                    @else
                                                        <p class="text-muted">No payment proof uploaded.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{ route('admin.orders.receipt', $order->id) }}" class="btn btn-secondary btn-sm">Cetak Struk</a>

                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="ti ti-device-floppy"></i> Simpan Perubahan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </tr>
                    @endforeach
                </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(event) {
            const orderId = this.getAttribute('data-id');

            // Show SweetAlert2 confirmation dialog
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, submit the form
                    document.getElementById('deleteForm' + orderId).submit();
                }
            });
        });
    });
</script>

@endsection
