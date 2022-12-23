<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Complete Responsive Grocery Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/RKstyle.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>



    {{-- Welcome Page default links and style --}}
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />



    {{-- admin dashboard links --}}


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/adminstyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    {{-- Admin dashboard links end --}}


    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <!-- header section starts  -->

    <header class="header">
        <a href="#" class="logo text-decoration-none">
            <i class="fas fa-shopping-basket "></i> Shoes Store
        </a>



        {{-- Aunthicated navbar Section section --}}

        @auth
            @if (Auth::user()->utype == 'ADM')
                <nav class="navbar">
                    <a href="{{ route('AdminDashboard') }}">Dashboard</a>
                    <a href="{{ route('AddProduct') }}">Add Product</a>
                    <a href="{{ route('Order') }}">Order</a>
                    <a href="{{ route('Users') }}">users</a>
                    <a href="{{ route('Message') }}">Message</a>

                </nav>
            @else
                <nav class="navbar">
                    <a href="#home">home</a>
                    <a href="{{ route('user.dashboard') }}">Dashboard</a>
                    <a href="#products">products</a>
                    <a href="#categories">categories</a>
                    <a href="#review">review</a>
                    <a href="#blogs">blogs</a>
                </nav>
            @endif
        @endauth



        <div class="mt-2">

            <nav class="navbar">
                @if (Route::has('login'))

                    @auth
                        {{-- class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" --}}


                        {{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <li> <i class="fas fa-user"></i> {{ Auth::user()->name }}
                        </button>

                        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                            id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">User Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close">Testing</button>

                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault (); this.closest('form').submit();">logout</a>

                                </form>
                            </div>
                            <div class="offcanvas-body">
                                <p>Try scrolling the rest of the page to see this option in action.</p>
                            </div>
                        </div> --}}


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






    </header>

    <!-- header section ends -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src=" {{ asset('js/script.js') }}"></script>








    @yield('admin_dashboard')
    @yield('admin_addproduct')
    @yield('admin_order')
    @yield('admin_message')
    @yield('admin_user')




    <!-- footer section starts  -->

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

                    <form action="" onsubmit="sendEmail(); reset(); return false;">
                        <div class="mb-3 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@gmail.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="contactbutton " type="submit"> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- footer section ends -->



</body>

</html>
