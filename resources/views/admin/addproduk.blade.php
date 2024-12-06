@extends('admin.layout.partial')
@section('admin')
<div class="container-fluid">
    <!--  Row 1 -->
    <div class="row">
      <div class="col-lg-12 d-flex align-items-strech">
        <div class="card w-100">
          <div class="card-body">
            <h5 class="mb-4 fw-bold">Tambah Produk</h5>

            <form  action="{{ route('admin.produk.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="productName" class="form-label">Nama Produk</label>
                <input required type="text" name="name" class="form-control" id="productName" placeholder="Masukkan nama produk" required>
              </div>

              <div class="mb-3">
                <label for="productPrice" class="form-label">Harga Produk</label>
                <input required type="number" name="price" class="form-control" id="productPrice" placeholder="Masukkan harga produk" required>
              </div>

              <div class="mb-3">
                  <label for="productPrice" class="form-label">Jumlah Stock</label>
                  <input required type="number" name="stock" class="form-control" id="productPrice" placeholder="Masukkan harga produk" required>
                </div>

              <div class="mb-3">
                <label for="productPrice" class="form-label">Kategori</label>
                <select required class="form-select form-select-sm" name="categories" aria-label="Small select example">
                  <option value="coffee">coffee</option>
                  <option value="coffe_moctail">coffe_moctail</option>
                  <option value="fruit_tea">fruit_tea</option>
                  <option value="milk_based">milk_based</option>
                  <option value="signature">signature</option>
                  <option value="pastry_dessert">pastry_dessert</option>
                </select>
              </div>
              <div class="mb-3">
                  <label for="productPrice" class="form-label">Preorder</label>
                  <select class="form-select form-select-sm" name="preorder" aria-label="Small select example">
                    <option value="ready">Ready</option>
                    <option value="not_ready">Not_ready</option>
                  </select>
              </div>

              <div class="mb-3">
                <label  for="productImage" class="form-label">Gambar Produk</label>
                <input class="form-control" required type="file" name="image" id="productImage" accept="image/*" required>
              </div>

              <div class="d-flex justify-content-between">
                <button required type="submit" class="btn btn-primary">Tambah</button>
                <a href="{{ route('admin.produk') }}" class="btn btn-secondary">Batal</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
