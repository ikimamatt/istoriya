@extends('admin.layout.partial')
@section('admin')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <div class="d-flex mb-4 justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">Produk</h5>
            <a href="#" class="btn btn-primary btn-sm">Tambah Produk</a>
          </div>

          <div class="table-responsive" data-simplebar>
            <table class="table table-borderless align-middle text-nowrap">
              <thead>
                <tr>
                  <th scope="col" class="text-center">ID Produk</th>
                  <th scope="col" class="text-center">Nama</th>
                  <th scope="col" class="text-center">Harga</th>
                  <th scope="col" class="text-center">Gambar</th>
                  <th scope="col" class="text-center">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center"><p class="fs-3 fw-normal mb-0">ICP001</p></td>
                  <td class="text-center"><p class="fs-3 fw-normal mb-0">Aren Latte</p></td>
                  <td class="text-center"><p class="fs-3 fw-normal mb-0">Rp25.000</p></td>
                  <td class="text-center">
                    <img src="{{ asset('assets/images/coffee/arenlatte.png') }}" alt="Gambar Produk" style="width: 150px; height: 150px;">
                  </td>
                  <td class="text-center">
                    <a href="#" class="btn btn-warning btn-sm">
                      <i class="bi bi-pencil-fill"></i> Edit
                    </a>
                    <button class="btn btn-danger btn-sm">
                      <i class="bi bi-trash-fill"></i> Hapus
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center"><p class="fs-3 fw-normal mb-0">ICP002</p></td>
                  <td class="text-center"><p class="fs-3 fw-normal mb-0">Lychee Tea</p></td>
                  <td class="text-center"><p class="fs-3 fw-normal mb-0">Rp25.000</p></td>
                  <td class="text-center">
                    <img src="{{ asset('assets/images/fruitteaseries/lycheetea.png') }}" alt="Gambar Produk" style="width: 150px; height: 150px;">
                  </td>
                  <td class="text-center">
                    <a href="#" class="btn btn-warning btn-sm">
                      <i class="bi bi-pencil-fill"></i> Edit
                    </a>
                    <button class="btn btn-danger btn-sm">
                      <i class="bi bi-trash-fill"></i> Hapus
                    </button>
                  </td>
                </tr>
                <tr>
                  <td class="text-center"><p class="fs-3 fw-normal mb-0">ICP003</p></td>
                  <td class="text-center"><p class="fs-3 fw-normal mb-0">Sakura</p></td>
                  <td class="text-center"><p class="fs-3 fw-normal mb-0">Rp25.000</p></td>
                  <td class="text-center">
                    <img src="{{ asset('assets/images/milkbased/sakura.png') }}" alt="Gambar Produk" style="width: 150px; height: 150px;">
                  </td>
                  <td class="text-center">
                    <a href="#" class="btn btn-warning btn-sm">
                      <i class="bi bi-pencil-fill"></i> Edit
                    </a>
                    <button class="btn btn-danger btn-sm">
                      <i class="bi bi-trash-fill"></i> Hapus
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
