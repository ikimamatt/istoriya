@extends('admin.layout.partial')
@section('admin')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="mb-4 fw-bold">Lihat Profil Cafe</h5>

          <form action="{{ route('admin.profiles.update', $profiles->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="productName" class="form-label">Instagram</label>
              <input type="text" name="instagram" value="{{ $profiles->instagram }}" class="form-control" id="productName" required>
            </div>

            <div class="mb-3">
              <label for="productPrice" class="form-label">Tiktok</label>
              <input type="text" name="tiktok" value="{{ $profiles->tiktok }}" class="form-control" id="productPrice"  required>
            </div>

            <div class="mb-3">
                <label for="productPrice" class="form-label">Whatsapp</label>
                <input type="text" name="whatsapp" value="{{ $profiles->whatsapp }}" class="form-control" id="productPrice"  required>
            </div>
            <div class="mb-3">
                <label for="productPrice" class="form-label">No Telephone</label>
                <input type="text" name="phone" class="form-control" value="{{ $profiles->phone }}"id="productPrice"  required>
            </div>


            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
