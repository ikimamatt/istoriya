@extends('admin.layout.partial')
@section('admin')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="mb-4 fw-bold">Lihat Profil Cafe</h5>

          <form>
            <div class="mb-3">
              <label for="productName" class="form-label">Nama Cafe</label>
              <input type="text" class="form-control" id="productName" placeholder="Masukkan nama cafe" required>
            </div>

            <div class="mb-3">
              <label for="productPrice" class="form-label">Deskripsi Cafe</label>
              <input type="text" class="form-control" id="productPrice" placeholder="Masukkan deskripsi cafe" required>
            </div>

            <div class="mb-3">
                <label for="productPrice" class="form-label">Alamat Cafe</label>
                <input type="text" class="form-control" id="productPrice" placeholder="Masukkan alamat cafe" required>
              </div>

            <div class="mb-3">
              <label for="productImage" class="form-label">Logo Cafe</label>
              <input class="form-control" type="file" id="productImage" accept="image/*" required>
            </div>
            
            <div class="mb-3">
                <label for="instagram" class="form-label">Sosial Media</label> <br>
                <div class="d-flex align-items-center">
                    <label for="instagram" class="form-label me-2">Instagram</label>
                    <input type="text" class="form-control flex-grow-1" id="instagram" placeholder="Masukkan username instagram" required>
                </div>
                <div class="d-flex align-items-center">
                    <label for="instagram" class="form-label me-2">Tiktok</label>
                    <input type="text" class="form-control flex-grow-1" id="instagram" placeholder="Masukkan usetirname tiktok" required>
                </div>
                <div class="d-flex align-items-center">
                    <label for="instagram" class="form-label me-2">WhatsApp</label>
                    <input type="text" class="form-control flex-grow-1" id="instagram" placeholder="Masukkan nomor WhatsApp" required>
                </div>
            </div>
            
            

            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary">Edit</button>
              <a href="{{ route('admin.produk') }}" class="btn btn-secondary">Hapus</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
