@extends('master.master')


@section('middlesection')
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


    <!--================================================================z======================================================================-->
    {{-- <div class="container-fluid">
        <div class="row "> --}}
    {{-- <div class="col-md-12"> --}}
    <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner active">
            <div class="carousel-item active">
                {{-- {{ asset('image/Temp-1550x650.jpg') }}
                            https://media.istockphoto.com/vectors/kathmandu-skyline-with-color-buildings-vector-id691369686 
                            
                            https://nepbizreviews.com/wp-content/uploads/2020/08/ladies-fashion-920x425.png --}}
                <img src="{{ asset('image/Temp-1550x650.jpg') }}" class="d-block img-fluid" alt="...">


            </div>
            <div class="carousel-item">
                <img src="https://wallpapercave.com/uwp/uwp1695353.jpeg " class="d-block img-fluid " alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://wallpapercave.com/wp/FzpjWiT.jpg" class="d-block img-fluid " alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    </div>
    </div>

    {{-- This is cart sectiom --}}

    {{-- This is cart page =============================================================================================== --}}

    <section class="products">
        <h1 class="heading">latest products</h1>

        <div class="box-container">

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
        <div class="row mt-5 mb-3">
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





    {{-- This is cart page =============================================================================================== --}}
@endsection('middlesection')
