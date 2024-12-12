<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('assets1/images/icons/favicon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/fonts/linearicons-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/vendor/slick/slick.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/vendor/MagnificPopup/magnific-popup.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/main.css') }}">

<!--===============================================================================================-->
<style>
    .js-modal1 {
    display: none; /* Semua modal tersembunyi secara default */
}

.js-modal1.show-modal {
    display: block; /* Modal yang aktif tampil */
}
img {
    display: block !important; /* Pastikan gambar terlihat */
    max-width: 100%; /* Sesuaikan ukuran */
}
.show-modal {
    display: block !important;
    opacity: 1;
    visibility: visible;
    z-index: 9999;
}
.icon-large {
    font-size: 1.5rem; /* Atur ukuran ikon di sini, misalnya 3rem */
}

.swal2-container {
    z-index: 9999 !important;
}
html {
    scroll-behavior: smooth;
}

</style>
</head>

<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="{{ route('index') }}" class="logo">
						<img src="assets/images/logos/logo1.png" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="{{ Request::is('/') ? 'active-menu' : '' }}">
                                <a href="{{ route('index') }}">Beranda</a>
                            </li>

                            <li class="{{ Request::is('katalog') ? 'active-menu' : '' }}">
                                <a href="{{ route('katalog') }}">Katalog Produk</a>
                            </li>

                            <li class="{{ Request::is('shop') ? 'active-menu' : '' }}">
                                <a href="{{ route('shop') }}">Pesan disini</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <a href="{{ route('order.viewCart') }}">
                            <i class="zmdi zmdi-shopping-cart icon-large"></i>
                        </a>
                    </div>

				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.html"><img src="assets/images/logos/logo1.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 js-show-cart icon-large">
                    <a href="{{ route('order.viewCart') }}">
                        <i class="zmdi zmdi-shopping-cart"></i>
                    </a>
                </div>
            </div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
            <!-- Menu Mobile -->
            <div class="menu-mobile">


                <ul class="main-menu-m">
                    <li class="{{ Request::is('/') ? 'active-menu' : '' }}">
                        <a href="{{ route('index') }}">Beranda</a>
                    </li>

                    <li class="{{ Request::is('/') ? 'active-menu' : '' }}">
                        <a href="{{ route('index') }}">Beranda</a>
                    </li>

                    <li class="{{ Request::is('katalog') ? 'active-menu' : '' }}">
                        <a href="{{ route('katalog') }}">Katalog Produk</a>
                    </li>

                    <li class="{{ Request::is('shop') ? 'active-menu' : '' }}">
                        <a href="{{ route('shop') }}">Pesan disini</a>
                    </li>
                </ul>
            </div>
		</div>


	</header>



    @yield('home')


	<!-- Footer -->
	<footer class="bg3 p-t-75 p-b-32 ">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-6 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Kategori
					</h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#coffee" class="stext-107 cl7 hov-cl1 trans-04">
                                Coffee
                            </a>
                        </li>
                        <li class="p-b-10">
                            <a href="#coffee_mocktail" class="stext-107 cl7 hov-cl1 trans-04">
                                Coffee Mocktail (+Soda)
                            </a>
                        </li>
                        <li class="p-b-10">
                            <a href="#fruit_tea" class="stext-107 cl7 hov-cl1 trans-04">
                                Fruit Tea Series
                            </a>
                        </li>
                        <li class="p-b-10">
                            <a href="#milk_based" class="stext-107 cl7 hov-cl1 trans-04">
                                Milk Based
                            </a>
                        </li>
                        <li class="p-b-10">
                            <a href="#signature" class="stext-107 cl7 hov-cl1 trans-04">
                                The Signature
                            </a>
                        </li>
                        <li class="p-b-10">
                            <a href="#pastry_dessert" class="stext-107 cl7 hov-cl1 trans-04">
                                Pastry Dessert
                            </a>
                        </li>
                    </ul>

				</div>

				{{-- <div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Help
					</h4>

					<ul>
						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Track Order
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Returns
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								Shipping
							</a>
						</li>

						<li class="p-b-10">
							<a href="#" class="stext-107 cl7 hov-cl1 trans-04">
								FAQs
							</a>
						</li>
					</ul>
				</div> --}}

				<div class="col-sm-6 col-lg-6 p-b-50">
					<h4 class="stext-301 cl7 p-b-30">
						kontak kami
					</h4>

					<p class="stext-107 cl7 size-201">
						Ada pertanyaan? hubungi kami di Whatsapp <a href="https://wa.me/081346606010">081346606010</a>
					</p>

					{{-- <div class="p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-instagram"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-pinterest-p"></i>
						</a>
					</div> --}}
				</div>


			</div>



				<p class="stext-107 cl6 txt-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made By Istoria</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

    @if(session('success'))
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@endif

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
	<script src="{{ asset('assets1/vendor/isotope/isotope.pkgd.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets1/vendor/sweetalert/sweetalert.min.js') }}"></script>
	<script>
		$('.js-addwish-b2, .js-addwish-detail').on('click', function(e){
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
    <script src="{{ asset('assets2/vendor/isotope.pkgd.min.js') }}"></script>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
