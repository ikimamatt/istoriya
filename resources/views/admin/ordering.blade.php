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
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"
                  >Something else here</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="table-responsive" data-simplebar>
          <table
            class="table table-borderless align-middle text-nowrap"
          >
            <thead>
              <tr>
                <th scope="col">ID Pemesanan</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No Telepon</th>
                <th scope="col">alamat</th>
                <th scope="col">Detail Pesanan</th>
                <th scope="col">Metode Pengambilan</th>
                <th scope="col">Status Pesanan</th>



              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                    <p class="fs-3 fw-normal mb-0">123456</p>
                  </td>
                <td>
                  <p class="fs-3 fw-normal mb-0">Rienata</p>
                </td>
                <td>
                    <p class="fs-3 fw-normal mb-0">123@gmail.com</p>
                  </td>
                <td>
                  <p class="fs-3 fw-normal mb-0 text-success">
                    +5357675768776
                  </p>
                </td>
                <td>
                    <p class="fs-3 fw-normal mb-0">jl di panjaitan</p>
                </td>
                <td>
                    <p class="fs-3 fw-normal mb-0">caffelatte</p>
                </td>
                <td>
                    <p class="fs-3 fw-normal mb-0">ambil sendiri</p>
                </td>
                <td>
                    
                  <span
                    class="badge bg-light-success rounded-pill text-success px-3 py-2 fs-3"
                    >Available</span
                  >
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