@extends('layout.layout')
@section('home')
<style>
    .table-responsive {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; /* Untuk pengalaman scroll yang lebih halus di perangkat mobile */
}

.table-shopping-cart {
    width: 100%;
    border-collapse: collapse;
    table-layout: auto;
}

.table-shopping-cart th,
.table-shopping-cart td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd; /* Tambahkan border agar tabel lebih rapi */
}

.table-shopping-cart .column-1 img {
    max-width: 60px;
    height: auto;
}

@media (max-width: 768px) {
    .table-shopping-cart th,
    .table-shopping-cart td {
        font-size: 14px; /* Sesuaikan ukuran teks untuk layar kecil */
        padding: 8px;
    }
}

</style>
	<!-- Shoping Cart -->
	<div class="bg0 p-t-75 m-t-50 p-b-85">
        <h1 class="text-center text-bold p-b-35">Konfirmasi Pesanan</h1>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Produk</th>
                                    <th class="column-2"></th>
                                    <th class="column-3">Harga</th>
                                    <th class="column-4 text-center">Jumlah</th>
                                    <th class="column-5">Total</th>
                                    <th class="column-6">Catatan</th>
                                </tr>
                                @foreach($cart as $item)
                                <tr class="table_row">
                                    <td class="column-1">
                                        <div class="how-itemcart1">
                                            <img src="{{ asset('storage/' . $item['image']) }}" alt="{{ $item['name'] }}">
                                        </div>
                                    </td>
                                    <td class="column-2">{{ $item['name'] }}</td>
                                    <td class="column-3">Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                                    <td class="column-4 text-center">{{ $item['quantity'] }}</td>
                                    <td class="column-5">Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                                    <td class="column-6">{{ $item['note'] ?? 'Tidak ada' }}</td>
                                    <td class="column-7">
                                        <button
                                            class="btn btn-danger btn-sm btn-delete"
                                            data-product-id="{{ $item['id'] }}"
                                            data-product-name="{{ $item['name'] }}">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                            <br>

						</div>
                        <a href="{{ route('shop') }}" class="p-t-27">
                            <button  class="flex-c-m btn btn-sm stext-101 cl0 size-116 bg1 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                kembali
                            </button>
                        </a>

					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-20 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            KONFIRMASI PEMESANAN
                        </h4>
                        <form action="{{ route('order.saveOrderDetails') }}" method="POST">
                            @csrf
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

                            {{-- <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        Email:
                                    </span>
                                </div>

                                <div class="flex-grow bor8 bg0 m-b-12" style="margin-left: 10px;">
                                    <input required class="stext-111 cl8 plh3 size-111 p-lr-15" type="email" name="email" placeholder="Masukkan Email Anda">
                                </div>
                            </div> --}}
                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        No Telepon:
                                    </span>
                                </div>

                                <div class="flex-grow bor8 bg0 m-b-12" style="margin-left: 10px;">
                                    <input required class="stext-111 cl8 plh3 size-111 p-lr-15" type="number" name="notelp" placeholder="Masukkan Nomor Telepon Anda">
                                </div>
                            </div>

                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        Metode Pengambilan:
                                    </span>
                                </div>

                                <div class="rs1-select2 bg0 m-b-12 m-t-9">
                                    <select class="js-select" required name="pickup_method">
                                      <option>Pilih Opsi</option>
                                      <option value="ambil_sendiri">Ambil Sendiri</option>
                                      <option value="diantar">Diantar</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                  </div>
                            </div>
                            <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                                <div class="size-208">
                                    <span class="stext-110 cl2">
                                        Alamat:
                                    </span>
                                </div>

                                <div class="flex-grow bor8 bg0 m-b-12" style="margin-left: 10px;">
                                    <textarea
                                        required
                                        class="stext-111 cl8 plh3 size-111 p-lr-15"
                                        name="alamat"
                                        rows="3"
                                        placeholder="Masukkan Alamat Anda"></textarea>
                                </div>
                                <small id="emailHelp" class="form-text text-danger">
                                    Catatan : Apabila Pengantaran berikan alamat sesuai titik, dan ongkos kirim ditanggung sendiri
                                </small>
                            </div>

                            <div class="flex-w flex-t p-t-27 p-b-33">
                                <div class="size-208">
                                    <span class="mtext-101 cl2">
                                        Total:
                                    </span>
                                </div>
                                <div class="size-209 p-t-1">
                                    <span class="mtext-110 cl2">
                                        Rp{{ number_format(array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart)), 0, ',', '.') }}
                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                Proses Pembayaran
                            </button>
                            <br>
                            <a href="{{ route('session.clear') }}" class="p-t-27">
                                <button  class="flex-c-m stext-101 cl0 size-116 bg1 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                                    kembali
                                </button>
                            </a>
                        </form>
                    </div>
                </div>

			</div>
		</div>
	</form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.btn-delete');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const productId = this.dataset.productId;
                    const productName = this.dataset.productName;

                    // SweetAlert Confirmation
                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: `Item "${productName}" akan dihapus dari keranjang.`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Buat form dan submit secara dinamis
                            const form = document.createElement('form');
                            form.method = 'POST';
                            form.action = '{{ route("cart.removeItem") }}';

                            // Tambahkan CSRF token
                            const csrfInput = document.createElement('input');
                            csrfInput.type = 'hidden';
                            csrfInput.name = '_token';
                            csrfInput.value = '{{ csrf_token() }}';
                            form.appendChild(csrfInput);

                            // Tambahkan product_id ke form
                            const productInput = document.createElement('input');
                            productInput.type = 'hidden';
                            productInput.name = 'product_id';
                            productInput.value = productId;
                            form.appendChild(productInput);

                            // Tambahkan form ke body dan submit
                            document.body.appendChild(form);
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>



@endsection
