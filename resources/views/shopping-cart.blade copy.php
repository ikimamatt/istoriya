@extends('layout.layout')
@section('home')

<form class="bg0 p-t-75 m-t-50 p-b-85">
    <h1 class="text-center text-bold p-b-35">Konfirmasi Pesanan</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Produk</th>
                                <th class="column-2">Catatan</th>
                                <th class="column-3">Harga</th>
                                <th class="column-4 text-center">Jumlah</th>
                                <th class="column-5">Total</th>
                                <th class="column-6">Aksi</th>
                            </tr>

                            @foreach($cart as $index => $item)
                            <tr class="table_row">
                                <td class="column-1">
                                    <div class="how-itemcart1">
                                        <img src="{{ $item['image'] }}" alt="IMG">
                                    </div>
                                </td>
                                <td class="column-2">{{ $item['note'] ?? '-' }}</td>
                                <td class="column-3">Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                                <td class="column-4 text-center">{{ $item['quantity'] }}</td>
                                <td class="column-5">Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                                <td>
                                    <!-- Tombol untuk menghapus item -->
                                    <a href="{{ route('remove-from-cart', $index) }}" class="btn btn-danger">Hapus</a>
                                </td>
                                </td>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-20 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        KONFIRMASI PEMESANAN
                    </h4>
                    <form action="{{ url('/confirm-order') }}" method="POST" class="bg0 p-t-75 m-t-50 p-b-85">
                        @csrf
                        <input type="hidden" name="total" value="{{ $total }}">
                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Nama:
                                </span>
                            </div>

                            <div class="flex-grow bor8 bg0 m-b-12" style="margin-left: 10px;">
                                <input required class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="nama" placeholder="Masukkan Nama Anda">
                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Email:
                                </span>
                            </div>

                            <div class="flex-grow bor8 bg0 m-b-12" style="margin-left: 10px;">
                                <input required class="stext-111 cl8 plh3 size-111 p-lr-15" type="email" name="email" placeholder="Masukkan Email Anda">
                            </div>
                        </div>
                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    No Telepon:
                                </span>
                            </div>

                            <div class="flex-grow bor8 bg0 m-b-12" style="margin-left: 10px;">
                                <input required class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="notelp" placeholder="Masukkan Nomor Telepon Anda">
                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Alamat:
                                </span>
                            </div>

                            <div class="flex-grow bor8 bg0 m-b-12" style="margin-left: 10px;">
                                <input required class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="alamat" placeholder="Masukkan Alamat Anda">

                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Metode Pengambilan:
                                </span>
                            </div>

                            <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                <select class="js-select2" name="time" required>
                                    <option value="">Pilih Opsi</option>
                                    <option value="ambil_sendiri">Ambil Sendiri</option>
                                    <option value="diantaar">Diantar</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2">Total:</span>
                            </div>
                            <div class="size-209 p-t-1">
                                <span class="mtext-110 cl2">Rp{{ number_format($total, 0, ',', '.') }}</span>
                            </div>
                        </div>

                        <button  type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Proses Pembayaran
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection
