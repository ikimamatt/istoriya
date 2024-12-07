@extends('admin.layout.partial')
@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    <div class="d-flex mb-4 justify-content-between align-items-center">
                        <h5 class="mb-0 fw-bold">Produk</h5>
                        <a href="{{ route('admin.addproduk') }}" class="btn btn-primary btn-sm">Tambah Produk</a>
                    </div>

                    <div class="table-responsive" data-simplebar>
                        <table class="table table-borderless align-middle text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">ID Produk</th>
                                    <th scope="col" class="text-center">Nama</th>
                                    <th scope="col" class="text-center">Harga</th>
                                    <th scope="col" class="text-center">Kategori</th>
                                    <th scope="col" class="text-center">Stok</th>
                                    <th scope="col" class="text-center">Preoder</th>
                                    <th scope="col" class="text-center">Gambar</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    <td class="text-center">{{ $product->product_id }}</td>
                                    <td class="text-center">{{ $product->name }}</td>
                                    <td class="text-center">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                                    <td class="text-center">{{ $product->categories }}</td>
                                    <td class="text-center">{{ $product->stock }}</td>
                                    <td class="text-center">{{ $product->preorder }}</td>
                                    <td class="text-center">
                                        @if($product->image_path)
                                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="Product Image" style="width: 80px; height: 80px;">
                                        @else
                                        <span>Tidak Ada Gambar</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <!-- Tombol Edit untuk Membuka Modal -->
                                        <button class="btn btn-warning btn-sm" onclick="openEditModal({{ $product }})">
                                            <i class="bi bi-pencil-fill"></i> Edit
                                        </button>

                                        <!-- Tombol Hapus dengan Konfirmasi SweetAlert -->
                                        <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $product->id }})">
                                            <i class="bi bi-trash-fill"></i> Hapus
                                        </button>
                                        <form id="delete-form-{{ $product->id }}" action="{{ route('admin.produk.delete', $product->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
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

<!-- Modal Edit Produk -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="editProductForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editProductModalLabel">Edit Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="productName" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="productName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Harga Produk</label>
                        <input type="text" class="form-control" id="productPrice" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Jumlah Stok</label>
                        <input required type="number" name="stock" class="form-control" id="productStock" placeholder="Masukkan jumlah stock" required>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Preorder</label>
                        <select class="form-select form-select-sm" id="productPreorder" name="preorder" aria-label="Small select example">
                            <option value="ada">Ada</option>
                            <option value="tidak_ada">tidak ada</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="productCategory" class="form-label">Kategori</label>
                        <select class="form-select form-select-sm" name="categories" id="productCategory" required>
                            <option value="" disabled>Pilih kategori produk</option>
                            <option value="coffee">Coffee</option>
                            <option value="coffe_moctail">Coffee Moctail</option>
                            <option value="fruit_tea">Fruit Tea</option>
                            <option value="milk_based">Milk Based</option>
                            <option value="signature">Signature</option>
                            <option value="pastry_dessert">Pastry Dessert</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="productImage" class="form-label">Gambar Produk</label>
                        <input class="form-control" type="file" id="productImage" name="image" accept="image/*">
                        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Skrip untuk Modal dan Konfirmasi Hapus -->
<script>
    // Fungsi untuk membuka modal edit dan memuat data produk ke dalam form
    function openEditModal(product) {
    // Mengatur action form sesuai dengan ID produk
    document.getElementById('editProductForm').action = `/admin/produk/${product.id}`;
    document.getElementById('productName').value = product.name;
    document.getElementById('productPrice').value = product.price;
    document.getElementById('productStock').value = product.stock;
    document.getElementById('productPreorder').value = product.preorder;

    document.getElementById('productCategory').value = product.categories;

    // Menampilkan modal
    var editModal = new bootstrap.Modal(document.getElementById('editProductModal'));
    editModal.show();
}

    // Konfirmasi hapus dengan SweetAlert
    function confirmDelete(productId) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak bisa membatalkan tindakan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal' // Teks tombol batal diubah menjadi "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`delete-form-${productId}`).submit();
            }
        })
    }
</script>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif

@endsection
