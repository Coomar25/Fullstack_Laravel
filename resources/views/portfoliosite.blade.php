<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.kumarchaudhary.com.np">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">


    <title>Coo_Mar - Personal Portfolio</title>

    <!-- Favicon -->

    <link rel="shortcut icon" href="{{ asset('image/favicon/facicon1.png') }}">
    {{-- <link rel="shortcut icon" href="images/favicon/favicon1.png"> --}}
    {{-- <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="images/favicon/apple-touch-icon.png"> --}}
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon"
        href="{{ asset('image/favicon/apple-touch-icon.png') }}">
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/plugin.css') }}">

    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/portfolio_style.css') }}">

    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">

    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>



    <!-- Preloader Start -->
    <div class="preloader">
        <p>Loading...</p>
    </div>
    <!-- Preloader End -->



    <!-- Menu Section Start -->
    <header id="home">

        <div class="header-top-area">
            <div class="container">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index-2.html">Coo_Mar</a>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <div class="navigation-menu">
                            <div class="navbar">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoth-scroll" href="#home">Home <div
                                                    class="ripple-wrapper"></div></a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#about">About</a>
                                            <!--</li>
                                        <li><a class="smoth-scroll" href="#portfolio">Portfolio</a>
                                        </li>-->
                                            <!-- <li><a class="smoth-scroll" href="#testimonials">Testimonial</a>
                                        </li> -->
                                        <li><a class="smoth-scroll" href="#services">services</a>
                                        </li>
                                        <li><a class="smoth-scroll" href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Menu Section End -->


    <!-- Home Section Start -->
    <section class="home-section">
        <div class="container">
            <div class="row">

                <div class="col-sm-offset-2 col-md-4 col-sm-6 margin-left-setting">
                    <div class="margin-top-150">

                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Name</td>
                                    <td>Kumar Chaudhary</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>kumarbhetwal25@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Designation</td>
                                    <td>Web Designer</td>
                                </tr>
                                <tr>
                                    <td>Experience</td>
                                    <td>2 Years</td>
                                </tr>
                                <tr>
                                    <td>Contact</td>
                                    <td>9867872978</td>
                                </tr>
                                <tr>
                                    <td>Resume</td>
                                    <td style="background-color: #f7639a;"><a href="#" target="_blank"
                                            data-toggle="tooltip" data-placement="top"
                                            title="Check Out My Resume">Resume.pdf</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 col-sm-6">
                    <div class="me-image">
                        {{-- <img src="images/bg/coomar.png" alt=""> --}}
                        <img src="{{ asset('image/bg/coomar.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Section End -->



    <!-- Experience Start -->
    <section class="section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>My Experience.</h2>
                        <div class="divider dark">
                            <i class="icon-graduation"></i>
                        </div>
                        <p>"True Change cannot be made if it is bound by laws and limitations, predictions and
                            imagination."</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <div class="experience">

                        <div class="experience-item">
                            <div class="experience-circle">
                                <i class="icon-graduation"></i>
                                <p>8, Jan 2019</p>
                            </div>
                            <div class="experience-content experience-color-blue">
                                <h4>Pain Allows People To Grow</h4>
                                <h6>Understand Pain</h6>
                                <p>When people get hurt, they learn to hate... When people hurt others, they become
                                    hated and racked with guilt. But knowing that pain allows people to be kind. Pain
                                    allows people to grow... and how you grow is up to you."</p>
                            </div>
                        </div>

                        <div class="experience-item">
                            <div class="experience-circle">
                                <i class="icon-trophy"></i>
                                <p>8, Feb 2021</p>
                            </div>
                            <div class="experience-content experience-color-blue">
                                <h4>Illusions</h4>
                                <h6>Understand illusions</h6>
                                <p>"Knowledge and awareness are vague, and perhaps better called illusions. Everyone
                                    lives within their own subjective interpretation."</p>
                            </div>
                        </div>

                        <div class="experience-item">
                            <div class="experience-circle">
                                <i class="icon-book-open"></i>
                                <p>8, Mar 2021</p>
                            </div>
                            <div class="experience-content experience-color-blue">
                                <h4>Listen Carefully</h4>
                                <h6>Never forget your friends!"</h6>
                                <p>"I'll admit that you're stronger than before. But because of that, you seem to have
                                    lost sight of what's truly important. Now listen carefully.
                                    The people around you, who once abhorred you, have begun to admire you. They think
                                    of you as a excellent examole of being good. It's because you fought hard for their
                                    acceptance.
                                    You once said it was everyone who cares about you who helped you get where you are
                                    now. If you forget others because you have power, and become arrogant
                                    and egotistical, you'll eventually become selfish. No matter how powerful you
                                    become, do not try to shoulder everything alone.
                                    Becoming kind doesn't mean people will acknowledge you. But when the people
                                    acknowledge you, you can become kind.

                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="experience">

                        <div class="experience-item">
                            <div class="experience-circle experience-company pink-color-bg">
                                <i class="icon-energy"></i>
                            </div>
                            <div class="experience-content">
                                <h4>Before Our Deaths</h4>
                                <h6>acknowledge yourself</h6>
                                <p>"We are humans, not God. We don't know what kind of people we truly are until the
                                    moment before our deaths. As death comes to embrace you, you will realize what you
                                    are. That's what death is, don't you think?"</p>
                            </div>
                        </div>

                        <div class="experience-item">
                            <div class="experience-circle experience-company pink-color-bg">
                                <i class="icon-ghost"></i>
                            </div>
                            <div class="experience-content">
                                <h4>Strong Ones</h4>
                                <h6>The Key</h6>
                                <p>
                                <ul>"Those who forgive themselves, and are able to accept their true nature... They are
                                    the strong ones!"</ul>
                                <ul>"It is not wise to judge others based on your own preconceptions and by their
                                    appearances."</ul>


                                </p>
                            </div>
                        </div>

                        <div class="experience-item">
                            <div class="experience-circle experience-company pink-color-bg">
                                <i class="icon-compass"></i>
                            </div>
                            <div class="experience-content">
                                <h4>Always Lied</h4>
                                <h6>A short message for her</h6>
                                <p>"I always lied to you telling you to forgive me. I used these hands to keep you at
                                    distance... I did not want you to get involved. But now... I think you could have
                                    changed father and mother. Perhaps even the entire Uchiha. If I would have stood in
                                    front of you and looked you in the eyes from the very beginning... talked to you
                                    instead of down to you... and been open about everything. But I failed, and speaking
                                    to you now, like this, isn't going to undo the permanent damage that's already been
                                    done to you. That's why I wanted to show you the truth. Even if it's just a little.
                                    And no matter what you decide to do from here on out, you never have to forgive me -
                                    I will always love you."</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Experience End -->


    <!-- About Start -->
    <section id="about" class="about section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>About Me.</h2>
                        <div class="divider dark">
                            <i class="icon-emotsmile"></i>
                        </div>
                        <p>We all live inside our own fantasies</p>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-md-6">
                    <div class="about-me-text margin-top-50">
                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat facilisis dignissim. Etiam scelerisque ultricies euismod. Etiam pellentesque enim ac risus dapibus consequat. Nulla euismod lacinia felis, vel <a href="#" data-toggle="modal" data-target="#skillmodal" title="My Skills"><b>Check out my Skills</b></a> massa accumsan sit amet. Cras id fermentum neque. Curabitur et mollis neque. Fusce eu mattis arcu. Integer eget augue sit amet lorem convallis fermentum, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat facilisis dignissim. Etiam scelerisque ultricies euismod. Etiam pellentesque enim ac risus dapibus consequat.</p>-->
                        <p>n this world it's not how you live, it's how you die. A person's life is not measured by how
                            they live but rather it's measured by what they
                            accomplish before their death. And looking back, my life has really been full of nothing but
                            failure. Continually ignored, hated, rejected by own father,
                            not being able to made my mom feel happy and unable to being close to either my friends or
                            my mentor. Compared to the great deeds of Mom my actions are all trifling,
                            insignificant things and deed. I wish I could have died. A tale is only good as it's final
                            turn of events. A plot twist. And
                            mistakes are important part of a plot, too. I lived my life always believing that the
                            lessons I learned are what honed me. I swore I'd accomplish a deed
                            so great that it would obliterate all my failures. I wish i could die a splendid man, at
                            least that's least that's how it's supposed to go. But my tale ending
                            like this... My mom prophesied that I would be the one who brings happiness and joy on her
                            face. A person who would make a great choice that will bring either
                            peace or destruction to the family. I thought I would bring happiness, made the family
                            prosperous and reduce the burden. But in the end,
                            I failed that, too. How pitiful. How sad that this will be the end twist to the tale of
                            Mine. What a worthless story it turned out to be</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-me-text pattern-bg margin-top-50 margin-bottom-50">
                        <div class="text-center">
                            <a class="button button-style button-style-dark button-style-color-2" data-toggle="modal"
                                data-target="#subscribemodal" href="#">Subscribe</a>
                        </div>
                    </div>

                    <div class="about-me-text">

                        <ul class="social-icon">
                            <li><a href="https://www.facebook.com/kumarbhetwal25/" target="_blank"
                                    class="facebook"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#" target="_blank" class="twitter"><i
                                        class="icon-social-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/coomar_25/" target="_blank" class="behance"><i
                                        class="icon-social-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UC6d0ZvkUvO0J5MFHT6Om16A" target="_blank"
                                    class="dribbble"><i class="icon-social-youtube"></i></a></li>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Skills Modal Start -->
    <div class="modal fade padding-top-70" id="skillmodal" role="dialog">
        <div class="modal-dialog">


            <div class="modal-content pattern-bg">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title margin-top-30">
                                <button type="button" class="btn pull-right" data-dismiss="modal"><i
                                        class="fa fa-close"></i></button>
                                <h2>My Skills.</h2>
                                <div class="divider dark">
                                    <i class="icon-energy"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8">

                            <div class="my-skill margin-bottom-50">
                                <strong>Graphic Design</strong>
                                <span class="pull-right">80%</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 80%;">
                                    </div>
                                </div>

                                <strong>Website Design</strong>
                                <span class="pull-right">99%</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar"
                                        aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 99%;">
                                    </div>
                                </div>

                                <strong>HTML5/CSS3</strong>
                                <span class="pull-right">85%</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar"
                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 85%;">
                                    </div>
                                </div>

                                <strong>Javascript</strong>
                                <span class="pull-right">90%</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar"
                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                        style="width: 90%;">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skills Modal End -->



    <!-- Subscribe Modal Start -->
    <div class="modal fade subscribe padding-top-120" id="subscribemodal" role="dialog">
        <div class="modal-dialog">


            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="section-title margin-top-30">
                                <button type="button" class="btn pull-right" data-dismiss="modal"><i
                                        class="fa fa-close"></i></button>
                                <h2>Subscribe.</h2>
                                <div class="divider dark">
                                    <i class="icon-envelope-letter"></i>
                                </div>
                                <p>You Can Send Desired Message Here</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-offset-2 col-xs-offset-0 col-md-8 col-sm-8">

                            <div class="margin-bottom-50">
                                <form id="mc-form" method="post" action="">
                                    <div class="subscribe-form">
                                        <input id="mc-email" type="email" placeholder="Email Address"
                                            class="text-input">
                                        <button class="submit-btn" type="submit">Submit</button>
                                    </div>
                                    <label for="mc-email" class="mc-label"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Subscribe Modal End -->
    <!-- About End -->



    <!-- Portfolio Start -->
    <!--<section id="portfolio" class="portfolio section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>My Portfolio.</h2>
                          <div class="divider dark">
      <i class="icon-picture"></i>
      </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
              <div class="col-md-2">
                <ul class="portfolio">
                    <li class="filter" data-filter="all">all</li>
                    <li class="filter" data-filter=".apps">apps</li>
                    <li class="filter" data-filter=".mockups">mockups</li>
                    <li class="filter" data-filter=".wordpress">wordpress</li>
                </ul>
              </div>
            
            <div class="col-md-10">
                <div class="portfolio-inner margin-top-30">
                
                
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps">
                        <div class="item">
                            <a href="images/portfolio/1.jpg" class="portfolio-popup" title="Project Title">
                                <img src="images/portfolio/1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix mockups">
                        <div class="item">
                            <a href="images/portfolio/2.jpg" class="portfolio-popup" title="Project Title">
                                <img src="images/portfolio/2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps">
                        <div class="item">
                            <a href="images/portfolio/3.jpg" class="portfolio-popup" title="Project Title">
                                <img src="images/portfolio/3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix mockups wordpress">
                        <div class="item">
                            <a href="images/portfolio/4.jpg" class="portfolio-popup" title="Project Title">
                                <img src="images/portfolio/4.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix wordpress apps">
                        <div class="item">
                            <a href="images/portfolio/5.jpg" class="portfolio-popup" title="Project Title">
                                <img src="images/portfolio/5.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 col-xs-12 mix apps mockups wordpress" title="Project Title">
                        <div class="item">
                            <a href="images/portfolio/6.jpg" class="portfolio-popup">
                                <img src="images/portfolio/6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
       </div>
        
        <div class="text-center margin-top-50">
          <a class="button button-style button-style-dark button-style-color-2 smoth-scroll" href="#contact">Hire Me!</a>
          </div>
     
    </section> -->
    <!-- Portfolio End -->



    <!-- Testimonial Start -->
    <section id="testimonials" class="testimonial-section section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Being Kind To Others</h2>
                        <div class="divider dark">
                            <i class="icon-speech"></i>
                        </div>
                        <p>"Knowing what it feels to be in pain, is exactly why we try to be kind to others."</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">
                    <div class="testimonial-carousel-list margin-top-20">

                        <div class="testimonial-word text-center">
                            <img src="images/testimonial/11.png" class="img-responsive" alt="">
                            <h2>Coo_Mar</h2>
                            <h3>Reality</h3>
                            <p>"People live their lives bound by what they accept as correct and true. That's how they
                                define "reality". But what does it mean to be "correct" or "true"? Merely vague
                                concepts... Their "reality" may all be a mirage. Can we consider them to simply be
                                living in their own world, shaped by their beliefs?"</p>
                        </div>

                        <div class="testimonial-word text-center">
                            <img src="images/testimonial/12.png" class="img-responsive" alt="">
                            <h2>Roshan</h2>
                            <p>"Growth occurs when one goes beyond one's limits. Realizing that is also part of
                                training."</p>
                        </div>

                        <div class="testimonial-word text-center">
                            <img src="images/testimonial/13.png" class="img-responsive" alt="">
                            <h2>Prashant</h2>

                            <p>"I actually don't think something like perfection exists. That is I think why we are born
                                able to absorb things... and by comparing ourselves with something else we can finally
                                head in a good direction."</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Testimonial End -->



    <!-- statistics -->
    <section class="statistics-section section-space-padding bg-cover text-center">
        <div class="container">

            <div class="row">

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="statistics bg-color-1">
                        <div class="statistics-icon"><i class="icon-mustache"></i>
                        </div>
                        <div class="statistics-content">
                            <h5><span data-count="2025" class="statistics-count">2025</span></h5><span>Projects
                                Done</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="statistics bg-color-6">
                        <div class="statistics-icon"><i class="icon-emotsmile"></i>
                        </div>
                        <div class="statistics-content">
                            <h5> <span data-count="1200" class="statistics-count">1200</span></h5><span>Happy
                                Clients</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="statistics bg-color-4">
                        <div class="statistics-icon"><i class="icon-hourglass"></i>
                        </div>
                        <div class="statistics-content">
                            <h5><span data-count="8000" class="statistics-count">8000</span></h5><span>Hours of
                                Work</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="statistics bg-color-5">
                        <div class="statistics-icon"><i class="icon-cup"></i>
                        </div>
                        <div class="statistics-content">
                            <h5><span data-count="4000" class="statistics-count">4000</span></h5><span>Cup of
                                Coffee</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- statistics end -->




    <!-- Services Start -->
    <section id="services" class="services-section section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>My Services.</h2>
                        <div class="divider dark">
                            <i class="icon-drop"></i>
                        </div>
                        <p>"If you want to kill me, despise me, hate me, and live in an unsightly way... Run, and cling
                            to life, and then some day, when you have the same eyes as I do, come before me."</p>
                    </div>
                </div>
            </div>

            <div class="row margin-top-30">

                <div class="col-md-4 col-sm-6">
                    <div class="services-detail">
                        <i class="icon-screen-smartphone color-1"></i>
                        <h3>Mobile Design</h3>
                        <hr>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="services-detail">
                        <i class="icon-screen-tablet color-2"></i>
                        <h3>Tablet Design</h3>
                        <hr>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="services-detail">
                        <i class="fa fa-code color-3"></i>
                        <h3>Clean Code</h3>
                        <hr>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="services-detail">
                        <i class="icon-support color-4"></i>
                        <h3>Full Support</h3>
                        <hr>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="services-detail">
                        <i class="fa fa-html5 color-5"></i>
                        <h3>HTML5 Design</h3>
                        <hr>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="services-detail">
                        <i class="icon-bulb color-6"></i>
                        <h3>CSS3 Design</h3>
                        <hr>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Services End -->



    <!-- Call to Action Start -->
    <section class="call-to-action bg-cover section-space-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Do You Want to Know More About Me?</h2>
                </div>

                <div class="col-md-4">
                    <div class="text-center">
                        <a class="button button-style button-style-color-2 smoth-scroll" href="#contact">Contact
                            Me</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Call to Action End -->




    <!-- Contact Start -->
    <section id="contact" class="section-space-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Contact Me.</h2>
                        <div class="divider dark">
                            <i class="icon-envelope-open"></i>
                        </div>
                        <p>I'm Sorry The Mail System doesn't work here.<br>Simply i won't be able access your
                            mail.<br>Sorry for the inconvenience</p>
                    </div>
                </div>
            </div>


            <div class="margin-top-30 margin-bottom-50">
                <div class="row">

                    <div class="col-md-offset-3 col-sm-offset-2 col-md-6 col-sm-8">

                        <div class="row">
                            <div class="contact-us-detail"><a href="mailto:kumarbhetwal25@gmail.com">You Can Email
                                    Here</a></div>
                            <form class="contact-us pattern-bg" action="https://formspree.io/f/mwkjekvw"
                                method="POST">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Your Name">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Your Email">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="website" id="website" class="form-control"
                                            placeholder="Your Website">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="address" id="address" class="form-control"
                                            placeholder="Where are You From?">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <select id="subject" name="topic" class="form-group form-control">
                                        <option value="" selected disabled>Subject</option>
                                        <option>Website Design & Development</option>
                                        <option>Wordpress Development</option>
                                        <option>Search Engine Optimization</option>
                                        <option>Mobile Website</option>
                                        <option>I Want to General Talk</option>
                                        <option>Other</option>
                                    </select>
                                </div>

                                <div class="col-sm-12">
                                    <div class="textarea-message form-group">
                                        <textarea id="message" name="message" class="textarea-message form-control" placeholder="Your Message"
                                            rows="5"></textarea>
                                    </div>
                                </div>


                                <div class="text-center">
                                    <button type="submit"
                                        class="button button-style button-style-dark button-style-color-2">Submit</button>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Contact End -->




    <!-- Footer Start -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <ul class="social-icon margin-bottom-30">
                        <li><a href="https://www.facebook.com/kumarbhetwal25/" target="_blank" class="facebook"><i
                                    class="icon-social-facebook"></i></a></li>
                        <li><a href="#" target="_blank" class="twitter"><i
                                    class="icon-social-twitter"></i></a></li>
                        <li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank" class="google-plus"><i
                                    class="icon-social-google"></i></a></li>
                        <li><a href="https://www.instagram.com/coomar_25/" target="_blank" class="instagram"><i
                                    class="icon-social-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UC6d0ZvkUvO0J5MFHT6Om16A" target="_blank"
                                class="dribbble"><i class="icon-social-youtube"></i></a></li>
                    </ul>
                </div>

                <div class="col-md-12 uipasta-credit">
                    <p>Design By <a href="" target="_blank" title="UiPasta">Coo_Mar</a></p>
                </div>

            </div>
        </div>
    </footer>
    <!-- Footer End -->


    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="icon-arrow-up-circle"></i></a>
    <!-- Back to Top End -->


    <!-- All Javascript Plugins  -->
    {{-- <script type="text/javascript" src="js/jquery.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('portfolio_js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('portfolio_js/plugin.js') }}"></script>

    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{{ asset('portfolio_js/scripts.js') }}"></script>


</body>

</html>
