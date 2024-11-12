@extends('admin.layout.partial')

@section('admin')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mt-4">
                <div class="card-body">
                    <h5 class="fw-bold mb-4">Detail Pesanan</h5>
                    
                    <div class="row">
                        <!-- Left Side: Order Details -->
                        <div class="col-md-6 border-end">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Pesanan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>2 Aren Latte</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Catatan: Normal Ice, Normal Sugar</td>
                                    </tr>
                                    <tr>
                                        <td class="pt-4">RINCIAN PEMBAYARAN</td>
                                    </tr>
                                    <tr>
                                        <td>Subtotal Produk</td>
                                        <td>Rp50.000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>TOTAL</strong></td>
                                        <td><strong>Rp50.000</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Right Side: Customer & Payment Info -->
                        <div class="col-md-6">
                            <h4 class="text-center">Rp50.000</h4>
                            <p class="text-center">10 Oktober 2024, 19.30 WITA</p>
                            <p class="text-center">ID: ICP0001</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Nama Pelanggan</td>
                                        <td>Hikmah A</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>Sepinggan Raya</td>
                                    </tr>
                                    <tr>
                                        <td>Metode Pengambilan</td>
                                        <td>Ambil Sendiri</td>
                                    </tr>
                                    <tr>
                                        <td>Metode Pembayaran</td>
                                        <td>BCA</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>Selesai</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="text-end mt-3">
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
