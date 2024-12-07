@extends('layout.layout')
@section('home')
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(assets/images/banner/slide-01.png);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Nikmati Kopi Terbaru Kami
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									KOPI PREMIUM PILIHAN
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="{{ route('shop') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Pesan Sekarang
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(assets/images/banner/slide-02.png);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Rasakan Tekstur Lembut Memanjakan
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									MILKBUN FAVORIT
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="{{ route('shop') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Pesan Sekarang
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="item-slick1" style="background-image: url(assets/images/banner/slide-03.png);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									Pertama di Balikpapan dengan Sourdough Mother <br> sehingga tekstur Roti lebih Chewy!
								</span>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
								<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
									ARTISAN BREAD
								</h2>
							</div>

							<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
								<a href="{{ route('shop') }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Pesan Sekarang
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Tentang Istoriya -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('assets/images/banner/bg-01.png');">
		<h2 class="ltext-105 cl0 txt-center style="color: #000000;">
			Tentang Istoriya
		</h2>
	</section>

	<!-- Content page -->
	<section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Definisi Istoriya
						</h3>

						<p class="stext-500 cl6 p-b-26">
							Istoriya adalah kata dasar dalam bahasa Rusia, yang bermakna “Story / Cerita”. Istoriya mengusung diri sebagai Cafe yang menyediakan menu kopi sesuai selera kekinian, mengingat varian kopi adalah menu wajib dimanapun tempat favorit untuk nongkrong. Bahan yang digunakan pun pilihan dalam rangka menjaga kualitas kenikmatan rasa, sehingga dari segi rasa boleh dibandingkan dengan cafe lain atau coffee shop sekalipun yang menyediakan varian yang sama pada menu mereka.
						</p>

						<p class="stext-500 cl6 p-b-26">
						Jadi, nama Istoriya Cafe mengambil filosofi dari definisi asli tiap tiap kata tersebut. Harapannya, Istoriya Cafe menjadi tempat favorit bagu pengu jung dan siapa saja yang sedang menulis kisah atau cerita yang saat ini sedang di jalani, maupun menjadi tempat saat merencanakan serta di bagikan kepada orang lain tentang banyak kisah dan cita-cita di masa yang akan datang.
						</p>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="assets/images/banner/about-01.png" alt="IMG">
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							Konsep Interior & Eksterior Istoriya Cafe
						</h3>

						<p class="stext-500 cl6 p-b-26">
							Konsep yang diterapkan di Istoriya, bernuansa hitam putih monochrome, retro, classic, dan vintage bergaya eropa sesuai nama dari negara Rusia dan bahasanya yang dipakai sebagai identitas utama. Berbeda dari yang lain, namun tetap memanjakan para Cafe Hunters penyuka tempat-tempat nongkrong yang instagrammable dan berfotoghraphy dengan elegan tanpa harus jauh-jauh ke Eropa. Khususnya interiornya yang hommie, tenang, dan nyaman layaknya di rumah sendiri sangat cocok untuk berinteraksi secara tatap muka bagi para tamu dan pengunjung yang ingin enjoy their Weekdays like Weekend, ataupun sebaliknya.
						</p>

						<div class="bor16 p-l-29 p-b-9 m-t-22">
							<p class="stext-114 cl6 p-r-40 p-b-11">
								A cafe is a place of refuge for the busy soul. In the comforting embrace of a warm cup of coffee, we find solace, creativity, and a sense of belonging. It’s the ideal setting for dreams to unfold and relationships to flourish, reminding us of the beauty of shared moments.
							</p>

							<span class="stext-111 cl8">
								- Istoriya Cafe
							</span>
						</div>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
						<div class="hov-img0">
							<img src="assets/images/banner/about-02.png" alt="IMG">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Sertifikasi -->
<section class="sec-blog bg0 p-t-60 p-b-90">
    <div class="container">
        <div class="p-b-66 text-center"> <!-- Tambahkan text-center untuk menengahkan judul -->
            <h3 class="ltext-105 cl5 respon1">
                Seluruh Menu Kami Bersertifikat Halal
            </h3>
        </div>

        <div class="row justify-content-center"> <!-- Tambahkan justify-content-center untuk menengahkan baris -->
            <div class="col-sm-6 col-md-4 p-b-40 text-center"> <!-- Tambahkan text-center di sini -->
                <div class="blog-item">
                    <div class="hov-img0">
                        <a href="#">
                            <img src="assets/images/banner/sertifikasi-01.png" alt="IMG-BLOG" class="img-fluid">
                        </a>
                    </div>
                    <div class="p-t-15">
                        <h4 class="p-b-12">
                            <a href="#" class="mtext-101 cl2 hov-cl1 trans-04">
                                Lampiran Sertifikasi Halal
                            </a>
                        </h4>
                        <p class="stext-108 cl6">
                            Produk Minuman
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 p-b-40 text-center"> <!-- Tambahkan text-center di sini -->
                <div class="blog-item">
                    <div class="hov-img0">
                        <a href="#">
                            <img src="assets/images/banner/sertifikasi-02.png" alt="IMG-BLOG" class="img-fluid">
                        </a>
                    </div>
                    <div class="p-t-15">
                        <h4 class="p-b-12">
                            <a href="#" class="mtext-101 cl2 hov-cl1 trans-04">
                                Lampiran Sertifikasi Halal
                            </a>
                        </h4>
                        <p class="stext-108 cl6">
                            Produk Bakeri
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

	<!-- Kontak Istoriya -->
	<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('assets/images/banner/bg-01.png');">
		<h2 class="ltext-105 cl0 txt-center style="color: #000000;">
			Kontak Istoriya
		</h2>
	</section>

	<!-- Content page -->
<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="flex-w flex-tr">
            <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-100"> <!-- Ubah w-full-md ke w-100 -->
                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-map-marker"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Alamat
                        </span> <br> <br>

						<p class="stext-115 cl6 size-213 p-t-18 w-100 d-inline">
							Jl. Siaga Atas No.76, Klandasan Ilir, Kec. Balikpapan Kota, Kota Balikpapan, Kalimantan Timur 76113 (Jam 10.00 - 22.00 WITA)
                        </p> <br> <br>

                        <p class="stext-115 cl6 size-213 p-t-18 d-inline">
                            Food Garden Plaza Balikpapan (Jam 14.00 - 22.00 WITA)
                        </p>
                    </div>
                </div>

                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-phone-handset"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Telepon
                        </span>

                        <p class="stext-115 cl1 size-213 p-t-18">
                            081346606010
                        </p>
                    </div>
                </div>

                <div class="flex-w w-full">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-envelope"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            Sosial Media
                        </span>

                        <p class="stext-115 cl1 size-213 p-t-18">
                            <a href="{{ $profiles->instagram }}">Instagram: @istoriya.cafe</a>
                        </p>
                        <p class="stext-115 cl1 size-213 p-t-18">
                            <a href="{{ $profiles->tiktok }}">tiktok: @istoriya.cafe</a>
                        </p>
                        <p class="stext-115 cl1 size-213 p-t-18">
                            <a href="https://wa.me/{{ $profiles->whatsapp }}">whatsapp: @istoriya.cafe</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS untuk border -->
<style>
    .bor10 {
        border: 2px solid #000; /* Atur ketebalan dan warna border */
        border-radius: 10px; /* Jika ingin ada sudut melengkung */
        padding: 20px; /* Tambahkan padding dalam kotak */
    }
</style>

<!-- Google Maps -->
<section class="bg0 p-t-60 p-b-60">
    <div class="container">
        <h3 class="mtext-110 cl2 txt-center p-b-45">
            Lokasi Istoriya Cafe Jalan Siaga
        </h3>
        <div class="map-responsive">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15850.353670043488!2d116.8471044!3d-1.26695!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df1474622c46185%3A0xaaa407c578ebdf29!2sIstoriya%20Cafe!5e0!3m2!1sen!2sid!4v1634240581106!5m2!1sen!2sid"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<style>
    .map-responsive {
        overflow: hidden;
        padding-top: 30px; /* Untuk jarak antara peta dan teks */
    }
    iframe {
        width: 100%; /* Membuat peta responsif */
        height: 450px; /* Tinggi iframe */
        border: none; /* Menghilangkan border iframe */
    }
</style>

<section class="bg0 p-t-60 p-b-60">
    <div class="container">
        <h3 class="mtext-110 cl2 txt-center p-b-45">
            Lokasi Istoriya Cafe Plaza Balikpapan
        </h3>
        <div class="map-responsive">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15856.501425975186!2d116.835962!3d-1.2786222!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df147b82e7b9c4f%3A0xe1095955922272f9!2sFood%20Garden%20Balikpapan!5e0!3m2!1sen!2sid!4v1634240595135!5m2!1sen!2sid"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<style>
    .map-responsive {
        overflow: hidden;
        padding-top: 30px; /* Untuk jarak antara peta dan teks */
    }
    iframe {
        width: 100%; /* Membuat peta responsif */
        height: 450px; /* Tinggi iframe */
        border: none; /* Menghilangkan border iframe */
    }
</style>



<!--===============================================================================================-->
	<script src="{{ asset('assets1/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets1/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets1/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets1/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets1/vendor/select2/select2.min.js') }}"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('assets1/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('assets1/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets1/vendor/slick/slick.min.js') }}"></script>
	<script src="{{ asset('assets1/js/slick-custom.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets1/vendor/parallax100/parallax100.js') }}"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
<!--===============================================================================================-->
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
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

		$('.js-addcart-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="{{ asset('assets1/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ asset('assets1/js/main.js') }}"></script>


@endsection
