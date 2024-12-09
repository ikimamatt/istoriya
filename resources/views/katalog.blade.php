@extends('layout.layout')
@section('home')

<!-- Product Section -->
<div class="bg0 m-t-100 p-b-140">
    <div class="container">
        <!-- Filter Buttons -->
        <div class="flex-w flex-sb-m p-b-52">
            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    All Products
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".coffee">
                    Coffee
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".coffe_moctail">
                    Coffee Mocktail (+Soda)
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".fruit_tea">
                    Fruit Tea Series
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".milk_based">
                    Milk Based
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".signature">
                    The Signature
                </button>

                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".pastry_dessert" >
                    Pastry Dessert
                </button>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="row isotope-grid">
            @foreach($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item
                @php
                    // Mengganti kategori menjadi pastry_dessert jika produk adalah salah satu dari yang ditentukan
                    $categories = ['donat', 'brownies', 'cheesecake', 'Milkbun', 'Pudding'];
                    $categoryClass = in_array($product->categories, $categories) ? 'pastry_dessert' : $product->categories;
                @endphp
                {{ $categoryClass }}">
                    <!-- Product Block -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="IMG-PRODUCT">
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l">
                                <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    {{ $product->name }}
                                </a>

                                <span class="stext-105 cl3">
                                    {{ number_format($product->price, 0, ',', '.') }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>



@endsection
