@extends('master.master')


@section('shopsection')
    {{-- This is cart sectiom --}}



    {{-- This is message for the product which are successfully added --}}

    @if (session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>
                <h1>Product Has Been Added To Cart</h1>
            </strong>
            <h1>You should probalbly check it out. Thank You Soo Much. </h1>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- This is message for the product which are successfully added --}}



    {{-- This is cart page =============================================================================================== --}}

    <section class="products">
        <h1 class="heading">latest products</h1>

        <div class="box-container ">

            @foreach ($products as $product)
                <form action="{{ route('AddCart', $product->id) }}" method="post" class="box">
                    @csrf



                    <input type="hidden" name="name" value="{{ $product->name }}" />
                    <input type="hidden" name="price" value="{{ $product->price }}" />
                    <input type="hidden" name="image" value="{{ $product->image }}" />
                    {{-- <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button> --}}
                    {{-- <a href=" " class="fas fa-eye"></a> --}}
                    <img src="{{ $product->image }}" alt="" />
                    <div class="name">{{ $product->name }}</div>
                    <div class="flex">
                        <div class="price"><span>NRs. {{ $product->price }} </span>price<span>/-</span></div>
                        <input type="number" name="qty" class="qty" min="1" max="99"
                            onkeypress="if(this.value.length == 2) return false;" value="1" />
                    </div>
                    <input type="submit" value="Add to cart" class="btn" />

                </form>
            @endforeach
        </div>

        <div class="row mt-4">
            <div class="col">
                {{ $products->links() }}
            </div>
        </div>


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
    </script>

    {{-- {{ $products->links() }} --}}



    {{-- This is cart page =============================================================================================== --}}
@endsection
