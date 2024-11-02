@extends('admin.layout.partial')
@section('admin')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="mb-4 fw-bold">Tambah Produk</h5>

          <form>
            <div class="mb-3">
              <label for="productName" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="productName" placeholder="Masukkan nama produk" required>
            </div>

            <div class="mb-3">
              <label for="productPrice" class="form-label">Harga Produk</label>
              <input type="text" class="form-control" id="productPrice" placeholder="Masukkan harga produk" required>
            </div>

            <div class="mb-3">
              <label for="productImage" class="form-label">Gambar Produk</label>
              <input class="form-control" type="file" id="productImage" accept="image/*" required>
            </div>

            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary">Tambah</button>
              <a href="{{ route('admin.produk') }}" class="btn btn-secondary">Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
