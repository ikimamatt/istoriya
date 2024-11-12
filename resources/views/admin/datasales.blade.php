@extends('admin.layout.partial')
@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card w-100">
                <div class="card-body p-4">
                    <h5 class="mb-4 fw-bold">Laporan Penjualan</h5>

                    <div class="d-flex justify-content-end mb-3">
                        <!-- Filter Button with Dropdown -->
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary me-2" id="filterButton" data-bs-toggle="dropdown" aria-expanded="false">
                                ⚙️ Filter
                            </button>
                            <div class="dropdown-menu p-3" aria-labelledby="filterButton" style="width: 300px;">
                                <div class="mb-3">
                                    <strong>Urutkan Berdasarkan</strong>
                                    <div>
                                        <input type="radio" id="filterDate" name="filter" value="Tanggal">
                                        <label for="filterDate">Tanggal</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="filterType" name="filter" value="Jenis Pesanan">
                                        <label for="filterType">Jenis Pesanan</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <strong>Tanggal</strong>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            📅
                                        </span>
                                        <input type="date" class="form-control" placeholder="Tanggal">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <strong>Jenis Pesanan</strong>
                                    <div>
                                        <input type="checkbox" id="minuman" name="jenis" value="Minuman">
                                        <label for="minuman">Minuman</label>
                                    </div>
                                    <div>
                                        <input type="checkbox" id="makanan" name="jenis" value="Makanan">
                                        <label for="makanan">Makanan</label>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button class="btn btn-primary">Terapkan</button>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary">🔍 Cari</button>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">ID Pesanan</th>
                                <th class="text-center">Waktu</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Jenis</th>
                                <th class="text-center">Pembayaran</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>ICP0001</td>
                                <td>10 Oktober 2024</td>
                                <td>Hikmah A</td>
                                <td>Minuman</td>
                                <td>BCA<br>Rp50.000</td>
                                <td><button class="btn btn-warning">👁️ Detail</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
