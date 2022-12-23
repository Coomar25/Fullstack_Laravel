@extends('master.master')


@section('Useraboutsection')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>about</title>

        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="{{ asset('css/caartstyle.css') }}">

    </head>

    <body>



        <section class="about">

            <div class="row mt-3">

                <div class="image">
                    {{-- <img src="https://tse1.mm.bing.net/th?id=OIP.ihpFokFQrUesNOoMa-3ATwHaHj&pid=Api&P=0" alt=""> --}}
                    {{-- <img src="{{ asset('image/1664008562022.jpg') }}" alt=""> --}}
                    <img class="mx-auto"
                        src="https://scontent.fktm6-1.fna.fbcdn.net/v/t1.6435-9/151218438_1459173991114723_2925885846081113765_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=LLYqCalzAHoAX-QLYtg&_nc_ht=scontent.fktm6-1.fna&oh=00_AfB1-0hq_zeHFvcYe4jJqO4t6CGbOEJNAL0Ructe5Iy15Q&oe=63CCD021"
                        alt="">
                </div>

                <div class="content">
                    <h3>About Me</h3>
                    <p>I am a student currently pursuing a Bachelor of Computer Applications (BCA) degree. With a strong
                        foundation in computer science and a passion for technology, I am well-equipped to succeed in this
                        field. I am dedicated to learning and staying up-to-date with the latest developments in the field,
                        and am determined to use my skills to make a positive impact in the world.

                        As a BCA student, I have gained a wide range of technical skills, including programming languages
                        such as C++ and Java, as well as expertise in databases and data structures. I have also developed
                        strong problem-solving and critical thinking skills, which will serve me well in my future career.

                        In addition to my academic pursuits, I am also involved in extracurricular activities and enjoy
                        spending time with friends and family. I am a well-rounded individual with a bright future ahead of
                        me.</p>
                    <a href="{{ route('PortfolioSite') }}" class="btn">Visit My Portfolio</a>
                </div>

            </div>

        </section>

        <section class="reviews">

            <h1 class="heading">client's reviews</h1>

            <div class="swiper reviews-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide slide">

                        <img class="mx-auto"
                            src="https://scontent.fktm6-1.fna.fbcdn.net/v/t39.30808-6/309177773_1864203283945123_7836174468310127626_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=UoORINPzUxEAX8IOP6a&_nc_ht=scontent.fktm6-1.fna&oh=00_AfAAk8jNdCogI1E1HEQRIds5J9SpSjiBpuUVQPVLTrnyoQ&oe=63A35FCA"
                            alt="">

                        <p>For me, the SSR Multisports deliver a good balance of on- and off-bike functionality, and as long
                            as the trainer style looks suit, they're a sound buy.</p>


                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <h3>Kumar Chaudhary</h3>
                    </div>



                </div>

                <div class="swiper-pagination"></div>

            </div>

        </section>

    </body>

    </html>
@endsection
