@extends('master.master')

@section('cart')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-12">
                <h1 class="heading text-center">Cart Product</h1>
            </div>
        </div>


        @php
            $total_cart_price = 0;
            $khalti = 0;
        @endphp


        @foreach ($carts as $cart_details)
            @php
                $total_cart_price = $cart_details->price * $cart_details->qty + $total_cart_price;
                $khalti = $total_cart_price * 100;
            @endphp


            <div class="row justify-content-evenly mt-3 ">

                <div class="col-md-2">
                    <div class="card-body">
                        <img src="{{ $cart_details->image }}" class="card-img" alt="Error Loading Image" />
                    </div>
                </div>
                <div class="col-md-6 mt-3">
                    <input type="hidden" name="order_product_name[]" value="Prouct Name">
                    <h2 class="card-title">Product Name:- {{ $cart_details->product_name }}</h2>

                    <input type="hidden" name="order_product_price" value="Prouct Price">
                    <h2 class="card-title">Product Price:- {{ $cart_details->price }}</h2>

                    <input type="hidden" name="order_product_quantity" value="Prouct Quantity">
                    <h2 class="card-title">Product Quantity:- {{ $cart_details->qty }}</h2>
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger mt-4 text-white">
                        <i class="icon-cart-add mr-2"></i> <a class="text-white text-decoration-none"
                            href="{{ route('delete.cart', $cart_details->id) }}">Delete from Cart</a>
                    </button>
                </div>

            </div>
        @endforeach

        <div class="row justify-content-evenly">
            <div class="col-md-8">
                <input value="Total :- Nrs. {{ $total_cart_price }} /-" class="btn btn-success" disabled />
                <a class="text-decoration-none" href="{{ route('order_product') }}"><input type="submit"
                        value="Order Product" class="btn btn-success" /></a>
            </div>
        </div>

    </div>












    {{-- <section class="products">
        <h1 class="heading">Cart Product</h1>

        <div class="box-container">
            @php
                $total_cart_price = 0;
                $price = 0;
                $khalti = 0;
            @endphp

            @foreach ($carts as $cart_details)
                @php
                    $price = $cart_details->price * $cart_details->qty + $price;
                    $total_cart_price = $price;
                    $khalti = $price * 100;
                @endphp



                <form action="" method="post" class="box">
                    @csrf
                    <input type="hidden" name="productname" value="{{ $cart_details->product_name }}" />
                    <input type="hidden" name="price" value="{{ $cart_details->price }}" />
                    <input type="hidden" name="image" value="{{ $cart_details->image }}" />
                    <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                    <a href=" " class="fas fa-eye"></a>
                    <img src="{{ $cart_details->image }}" alt="" />
                    <div class="name">{{ $cart_details->product_name }}</div>
                    <div class="flex">
                        <div class="price"><span>NRs. {{ $cart_details->price * $cart_details->qty }}
                            </span>price<span>/-</span></div>
                        <input type="number" name="qty" class="qty" min="1" max="99"
                            value="{{ $cart_details->qty }}" disabled />
                    </div>
                    <a href="{{ route('delete.cart', $cart_details->id) }}">
                        <input value="Delete From Cart" class="btn btn-danger" /></a>

                </form>
            @endforeach

        </div>
        <form action="">
            <a href=""><input type="submit" value="Order Product" class="btn btn-success" /></a>
            <input value="Total :- Nrs. {{ $total_cart_price }} /-" class="btn btn-success" disabled />
        </form>


    </section>

    <script>
        let navbar = document.querySelector(".header .flex .navbar");
        let profile = document.querySelector(".header .flex .profile");

        document.querySelector("#menu-btn").onclick = () => {
            navbar.classList.toggle("active");
            profile.classList.remove("active");
        };

        document.querySelector("#user-btn").onclick = () => {
            profile.classList.toggle("active");
            navbar.classList.remove("active");
        };

        window.onscroll = () => {
            navbar.classList.remove("active");
            profile.classList.remove("active");
        };

        let mainImage = document.querySelector(
            ".quick-view .box .row .image-container .main-image img"
        );
        let subImages = document.querySelectorAll(
            ".quick-view .box .row .image-container .sub-image img"
        );

        subImages.forEach((images) => {
            images.onclick = () => {
                src = images.getAttribute("src");
                mainImage.src = src;
            };
        });
    </script> --}}
@endsection
