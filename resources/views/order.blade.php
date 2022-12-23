@extends('master.master')



@Section('userorders')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>orders</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="{{ asset('css/caartstyle') }}">

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


    </head>

    <body>

        <section class="orders">

            @foreach ($checkout_data as $checkout_item)
                <div class="box-container">
                    <div class="box mb-3">
                        <p>Product Name: <span>{{ $checkout_item->checkout_productname }}</span>
                        </p>

                        <p>Total Price : <span>{{ $checkout_item->checkout_price }}</span>
                        </p>

                        <p>Quantity : <span>{{ $checkout_item->checkout_quantity }}</span></p>

                        <p>Email : <span>{{ $checkout_item->checkout_email }}</span></p>

                        <p>Name : <span>{{ $checkout_item->checkout_name }}</span>
                        </p>

                        <p>Number : <span>{{ $checkout_item->checkout_number }}</span>
                        </p>

                        <p>Payment Method : <span>{{ $checkout_item->checkout_method }}</span>
                        </p>

                        <p>State | City : <span>{{ $checkout_item->checkout_state }} |
                                {{ $checkout_item->checkout_city }}</span>
                        </p>

                        <p> Status : <span> {{ $checkout_item->checkout_status }}</span>
                        </p>

                    </div>

                </div>
            @endforeach






        </section>









    </body>

    </html>
@endsection
