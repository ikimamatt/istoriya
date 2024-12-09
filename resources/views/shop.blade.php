@extends('layout.layout')
@section('home')

	<!-- Product -->
	<div class="bg0 m-t-23 p-t-75 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						All Products
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".donat">
						Donat
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".brownies">
						Brownies
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".cheesecake">
						Cheesecake
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Milkbun">
						Milkbun
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Pudding">
						Pudding
					</button>
				</div>
			</div>

			<div class="row isotope-grid">
                @foreach($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{ $product->categories }}">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}">

                            <a href="#"
                                data-id="{{ $product->id }}"
                                class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                Order
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l">
                                <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    {{ $product->name }}
                                </a>

                                <span class="stext-105 cl3">
                                    Rp{{ number_format($product->price, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="wrap-modal1 js-modal1 p-t-60 p-b-20" id="modal-{{ $product->id }}">
                    <div class="overlay-modal1 js-hide-modal1"></div>

                    <div class="container">
                        <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                            <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                                <img src="{{ asset('assets/images/icons/icon-close.png') }}" alt="CLOSE">
                            </button>

                            <div class="row">
                                <div class="col-md-6 col-lg-7 p-b-30">
                                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                                        <div class="wrap-slick3 flex-sb flex-w">
                                            <div class="wrap-slick3-dots"></div>
                                            <div class="wrap-slick3-arrows flex-sb-m flex-w">
                                                <img class="text-center" src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-7 p-b-30">
                                    <div class="p-l-25 p-r-30 p-lr-0-lg">
                                        <div class="wrap-slick3 flex-sb flex-w">
                                            <div class="slick3 gallery-lb">
                                                <div class="item-slick3" data-thumb="{{ asset('storage/' . $product->image_path) }}">
                                                    <div class="wrap-pic-w pos-relative">
                                                        <a href="#"
                                                            data-id="{{ $product->id }}"
                                                            data-image="{{ asset('storage/' . $product->image_path) }}"
                                                            class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                            Order
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-5 p-b-30">
                                    <div class="p-r-50 p-t-5 p-lr-0-lg">
                                        <h4 class="mtext-105 cl2 js-name-detail p-b-14">
                                            {{ $product->name }}
                                        </h4>

                                        <span class="mtext-106 cl2">
                                            Rp{{ number_format($product->price, 0, ',', '.') }}
                                        </span><br><br>

                                        <span class="mtext-104 cl2">
                                            Stok : {{ $product->stock }}
                                        </span>

                                        <div class="p-t-33">
                                            <form action="{{ route('order.addToCart') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="product_name" value="{{ $product->name }}">
                                                <input type="hidden" name="product_price" value="{{ $product->price }}">
                                                <input type="hidden" name="product_image" value="{{ $product->image_path }}">


                                                <div class="p-b-10">
                                                    <label for="note" class="stext-102 cl3 p-t-23">Catatan</label>
                                                    <textarea id="note" name="note" class="form-control note-input" placeholder="Masukkan catatan (opsional)"></textarea>
                                                </div>

                                                <div class="flex-w flex-r-m p-b-10">
                                                    <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                                                        <button type="button" class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                                        </button>

                                                        <input class="mtext-104 cl3 txt-center num-product"
                                                               type="number"
                                                               name="quantity"
                                                               value="1"
                                                               min="1"
                                                               data-stock="{{ $product->stock }}">

                                                        <button type="button" class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                                <button type="submit" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                                    Masukkan ke Keranjang
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
			</div>

			{{-- <!-- Load more -->
			<div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div> --}}
		</div>
	</div>

    <script src="{{ asset('assets1/vendor/MagnificPopup/jquery.magnific-popup.min.js') }}"></script>
	<script>
		$('.gallery-lb').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modalTriggers = document.querySelectorAll('.js-show-modal1');

            modalTriggers.forEach(trigger => {
                trigger.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Sembunyikan semua modal yang aktif
                    document.querySelectorAll('.js-modal1').forEach(modal => {
                        modal.classList.remove('show-modal');
                    });

                    // Tangkap ID produk dari atribut data-id
                    const productId = this.getAttribute('data-id');

                    // Tangkap path gambar dari atribut data-image
                    const productImage = this.getAttribute('data-image');

                    // Cari modal spesifik berdasarkan ID
                    const modal = document.getElementById('modal-' + productId);

                    // Tampilkan modal yang sesuai
                    if (modal) {
                        modal.classList.add('show-modal');

                        // Update gambar di modal
                        const modalImage = modal.querySelector('.wrap-pic-w img');
                        if (modalImage) {
                            modalImage.src = productImage;
                        }
                    } else {
                        console.error('Modal not found for product ID:', productId);
                    }
                });
            });

            // Tangani penutupan modal
            document.querySelectorAll('.js-hide-modal1').forEach(closeBtn => {
                closeBtn.addEventListener('click', function () {
                    const modal = this.closest('.js-modal1');
                    if (modal) {
                        modal.classList.remove('show-modal');
                    }
                });
            });
        });
    </script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
    const btnIncrease = document.querySelectorAll('.btn-num-product-up');
    const btnDecrease = document.querySelectorAll('.btn-num-product-down');

    btnIncrease.forEach(button => {
        button.addEventListener('click', function () {
            const input = this.parentElement.querySelector('.num-product');
            let currentValue = parseInt(input.value, 10) || 0;
            const maxStock = parseInt(input.getAttribute('data-stock'), 10);

            // Tambah 1 hanya jika belum mencapai stok maksimum
            if (currentValue < maxStock) {
                input.value = currentValue + 1;
            } else {
                // SweetAlert dengan z-index di atas modal
                Swal.fire({
                    icon: 'error',
                    title: 'Stok Habis!',
                    text: 'Jumlah tidak dapat melebihi stok yang tersedia.',
                    confirmButtonText: 'OK',
                    customClass: {
                        container: 'swal2-container'
                    }
                });
            }
        });
    });

    btnDecrease.forEach(button => {
        button.addEventListener('click', function () {
            const input = this.parentElement.querySelector('.num-product');
            let currentValue = parseInt(input.value, 10) || 0;

            // Kurangi 1 jika lebih besar dari 1
            if (currentValue > 1) {
                input.value = currentValue - 1;
            }
        });
    });
});

    </script>



@endsection
