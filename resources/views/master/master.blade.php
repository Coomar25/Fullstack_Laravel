<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shoes Store</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/RKstyle.css') }}" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>


    <!-- Bootstrap icon link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">


    {{-- Welcome Page default links and style --}}
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>



    {{-- casrt section links --}}
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/caartstyle.css') }}" />

    {{-- caart section kinks ends here --}}


    {{-- Jquery Cdn for payment gateway --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <!-- header section starts  -->




    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg" style="background-color: #333;">
                <div class="container-fluid">
                    <a class="navbar-brand text-white fs-1 fs-2" href="#">
                        <h1>Shoes Store</h1>
                    </a>

                    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto gap-3 mb-2 mb-lg-0">

                            {{-- Aunthicated navbar Section section --}}

                            @auth
                                @if (Auth::user()->utype == 'ADM')
                                    <li class="nav-item">
                                        <a class=" nav-item nav-link active text-white fs-4" aria-current="page"
                                            href="{{ route('AdminDashboard') }}">Dashboard</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active text-white fs-4" aria-current="page"
                                            href="{{ route('AddProduct') }}">Add Product</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active text-white fs42" aria-current="page"
                                            href="{{ route('Order') }}">Order</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active text-white fs-4" aria-current="page"
                                            href="{{ route('Users') }}">users</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active text-white fs-4" aria-current="page"
                                            href="{{ route('Message') }}">Message</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active text-white fs-2" aria-current="page"
                                            href="{{ route('AddProduct') }}">Add Product</a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link active text-white fs-4" aria-current="page"
                                            href="{{ route('UserIndex') }}">home</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active text-white fs-4" aria-current="page"
                                            href="{{ route('UserAbout') }}">About</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link active text-white fs-4" aria-current="page"
                                            href="{{ route('UserOrders') }}">orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active text-white fs-4" aria-current="page"
                                            href="{{ route('UserShop') }}">shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active text-white fs-4" aria-current="page"
                                            href="{{ route('UserContact') }}">contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active text-white  fs-4" aria-current="page"
                                            href="{{ route('UserCart') }}"> <i
                                                class="fa-solid fa-cart-shopping me-2"></i>Cart</a>
                                    </li>
                                @endif
                            @endauth

                            {{-- This is for aunthenticated login --}}

                            {{-- <div class="search_section me-3">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="addproductbutton btn-outline-success"
                                        type="submit">Search</button>
                                </form>
                            </div> --}}
                        </ul>







                        @if (Route::has('login'))

                            @auth

                                <div class="d-flex me-3">
                                    <i class="bi bi-person-circle text-white  fs-2 me-2"></i>

                                    <h6 class="text-white mt-2 fs-4">{{ Auth::user()->name }}</h6>
                                </div>

                                <div class="d-flex me-3">
                                    <i class="bi bi-box-arrow-left text-white fs-2 me-2"></i>
                                    <h6 class="text-white mt-2 fs-4">

                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <a class="text-white mt-2" href="{{ route('logout') }}"
                                                onclick="event.preventDefault (); this.closest('form').submit();">logout</a>
                                        </form>
                                    </h6>
                                </div>

                                {{-- Above code is inserting from below --}}
                            @else
                                <div class="d-flex mt-3 me-3">
                                    <i class="bi bi-box-arrow-in-right text-white fs-2 me-2"></i>
                                    <h6 class="mt-2">
                                        <a class="text-white fs-4" href="{{ route('login') }}">Log in</a>
                                    </h6>
                                </div>

                                @if (Route::has('register'))
                                    <div class="d-flex mt-3 me-3">
                                        <i class="bi bi-r-square-fill text-white fs-2 me-2"></i>
                                        <h6 class="mt-2"><a class="text-white fs-4"
                                                href="{{ route('register') }}">Register</a>
                                        </h6>
                                    </div>
                                @endif

                            @endauth

                        @endif





                    </div>


                </div>
            </nav>
        </div>
    </div>

















    <!-- header section starts  -->
    {{-- Aunthicated navbar Section section --}}

    {{-- <header class="header">
        <a href="#" class="logo text-decoration-none">
            <i class="fas fa-shopping-basket "></i> Shoes Store
        </a>



        @auth
            @if (Auth::user()->utype == 'ADM')
                <nav class="navbar">
                    <a class="text-decoration-none" href="{{ route('AdminDashboard') }}">Dashboard</a>
                    <a class="text-decoration-none" href="{{ route('AddProduct') }}">Add Product</a>
                    <a class="text-decoration-none" href="{{ route('Order') }}">Order</a>
                    <a class="text-decoration-none" href="{{ route('Users') }}">users</a>
                    <a class="text-decoration-none" href="{{ route('Message') }}">Message</a>

                </nav>
            @else
                <nav class="navbar">
                    <a class="text-decoration-none" href="{{ route('UserIndex') }}">home</a>
                    <a class="text-decoration-none" href="{{ route('UserAbout') }}">About</a>
                    <a class="text-decoration-none" href="{{ route('UserOrders') }}">orders</a>
                    <a class="text-decoration-none" href="{{ route('UserShop') }}">shop</a>
                    <a class="text-decoration-none" href="{{ route('UserContact') }}">contact</a>
                    <a class="text-decoration-none" href="{{ route('UserCart') }}"> <i
                            class="fa-solid fa-cart-shopping"></i>Cart</a>
                </nav>
            @endif
        @endauth




        <div class="mt-2">

            <nav class="navbar">
                @if (Route::has('login'))

                    @auth



                        <li> <i class="fas fa-user"></i> {{ Auth::user()->name }} /

                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault (); this.closest('form').submit();">logout</a>

                            </form>

                        </li>
                    @else
                        <a href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth

                @endif

            </nav>
        </div>






    </header> --}}

    <!-- header section ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src=" {{ asset('js/script.js') }}"></script>



    @yield('middlesection')
    @yield('Useraboutsection')
    @yield('userorders')
    @yield('shopsection')
    @yield('usercontact')
    @yield('cart')
    @yield('checkoutform')



    <!-- =================================footer================================== -->
    <div class="footersection">
        <div class="container-fluid">
            <div class="row justify-content-evenly footSection ">
                <div class="col-md-3 mt-4">
                    <h4>Want to have contract with us</h4>

                    <h5 class="mt-4">About Us</h5>
                    <p class="mt-3"> We sell the prememium quality products. Founded in 2022, We are committed to
                        offering
                        customers an unparalleled shoe-shopping experience beginning with a truly outstanding selection
                        of the
                        hottest styles from must-have brands like Converse, dolce vita, Michael Kors, New Balance, Sam
                        Edelman, Vans
                        and hundreds more. Other perks include free shipping and exchanges, 60-day returns and real-time
                        order
                        tracking.</p>

                </div>


                <div class="col-md-3 mt-4">
                    <h4>Quantum Dev Office</H4>
                    <h6>Naragyanghat Bharatpur-5</h6>
                    <h6>Khairhanai-0, Chitwan</h6>
                    <h5 class="mt-4">Usefull Links</h5>
                    <div class="footerusefulllink">
                        <h6 mt-1><a href="">Men Shoes</a></h6>
                        <h6 mt-1><a href="">Women Shoes</a></h6>
                        <h6 mt-1><a href="">Kid Shoes</a></h6>
                        <h6 mt-1><a href="">Sale</a></h6>
                    </div>
                </div>


                <div class="col-md-3 mt-4">
                    <h4>Satisfied with our product!</h4>
                    <p>Contact Us</p>

                    <form action="https://formspree.io/f/mwkjekvw" method="POST">
                        <div class="mb-3 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="contactbutton " type="submit"> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>





        <!-- =================================footer End Here================================== -->



        {{-- THis script tag is for the user home,about, orders, shop and contact page --}}

        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

        <script src="js/script.js"></script>

        <script>
            var swiper = new Swiper(".home-slider", {
                loop: true,
                spaceBetween: 20,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });

            var swiper = new Swiper(".category-slider", {
                loop: true,
                spaceBetween: 20,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    0: {
                        slidesPerView: 2,
                    },
                    650: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 4,
                    },
                    1024: {
                        slidesPerView: 5,
                    },
                },
            });

            var swiper = new Swiper(".products-slider", {
                loop: true,
                spaceBetween: 20,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    550: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                },
            });
        </script>
        <script src='https://cdn.jsdelivr.net/gh/khushit-shah/WriteIt.js@version/writeit.min.js'></script>

        {{-- ends THis script tag is for the user home,about, orders, shop and contact page --}}


</body>

</html>
