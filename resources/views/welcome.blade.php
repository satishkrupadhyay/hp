<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
        <!-- font awesome -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/superslide/superslides.css">

        <link rel="stylesheet" href="css/fancybox/jquery.fancybox.css">
        <link rel="stylesheet" href="css/nivo-lightbox/nivo-lightbox.css">
        <link rel="stylesheet" href="css/themes/default/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/animate/animate.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.transitions.css">

        <script src="js/jquery/jquery.js"></script>

        <script src="js/script.js"></script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/fancybox/jquery.fancybox.pack.js"></script>
        <script src="js/nivo-lightbox/nivo-lightbox.min.js"></script>
        <script src="js/owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBL6gbhsnCEt4FS9D6BBl3mZO1xy-NcwpE&sensor=false"></script>
        <script src="js/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="js/superslide/jquery.superslides.js"></script>
        <script src="js/wow/wow.min.js"></script>
       
        <title>HealthAPP</title>

        
    </head>
    <body>
        <!-- @include('layouts.master')
    
      <!--  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Login</a>
                    <a href="https://laracasts.com">Signup</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Test</a>
                    <a href="https://github.com/laravel/laravel">Test</a>
                </div>
            </div>
        </div>

 -->
 <div class='preloader'><div class='loaded'>&nbsp;</div></div>
       @include('partials.header')

        <section id="home">
            <div id="bgimage" class="header-image">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-5 col-xs-12">
                            <div class="iphone center-content wow fadeInLeft" data-wow-duration="1s">
                                <img src="images/iphone.png" alt="" />
                            </div>
                        </div>

                        <div class="col-sm-7 col-xs-12 heading-text">
                            <div class="single_home_content wow zoomIn" data-wow-duration="1s">
                                <h1>Introducing REMEDIO </h1>
                                <p class="bannerDescription">Now get your medicines delivered at your doorstep. HASSLE FREE.</p>
                                <div class="button">
                                    <a href="" class="btn">Downlod APP</a>
                                    <a href="" class="btn white-btn youtube-media"><i class="fa fa-play"></i> Watch video</a>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end of row -->
                </div> <!-- end of container -->

                <div class="scrolldown">
                    <a href="#works_2" class="scroll_btn"></a>
                </div>

            </div>

        </section>


        <!-- Our Works Section -->

        <section id="works" class="center-content">
            <div class="container">
                <div class="row">
                    <div class="works_content text-center">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration=".5s">
                                <i class="fa fa-crop"></i>
                                <h3>Clean and Responsive</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration=".8s">
                                <i class="fa fa-cube"></i>
                                <h3>Clean and Responsive</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.2s">
                                <i class="fa fa-magic"></i>
                                <h3>Clean and Responsive</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.5s">
                                <i class="fa fa-code-fork"></i>
                                <h3>Clean and Responsive</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="1.9s">
                                <i class="fa fa-rocket"></i>
                                <h3>Clean and Responsive</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="2.3s">
                                <i class="fa fa-database"></i>
                                <h3>Clean and Responsive</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="2.6s">
                                <i class="fa fa-rocket"></i>
                                <h3>Clean and Responsive</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single_works_text wow fadeInLeft" data-wow-duration="2.9s">
                                <i class="fa fa-database"></i>
                                <h3>Clean and Responsive</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="works_2">
            <div class="container">
                <div class="row">
                    <div class="works_2_content">
                        <div class="col-sm-4 col-xs-12">
                            <div class="works_2_iphone center-content">
                                <img src="images/iphone1.png" alt="" />
                            </div>
                        </div>
                        <div class="col-sm-8 col-xs-12 top-margin">
                            <div class="row">
                                <div class="single_works_2_content wow fadeInRight" data-wow-duration="1.5s">
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-crop"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-cube"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-magic"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-code-fork"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-rocket"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="single_works_2_text">
                                            <i class="fa fa-database"></i>
                                            <div class="text_deatels">
                                                <h3>Clean and Responsive</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at nibh orci.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section -->

        <section id="video_icon">
            <div class="video_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="video_text center-content">
                                <a href="http://www.youtube.com" class="youtube-media">
                                <img src="images/play.png" alt="" />
                                </a>
                                <h5>Watch the feature video</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>

        <!-- Description Section -->

        <section id="descriotion">
            <div class="container">
                <div class="row main_description">
                    <div class="col-sm-6 col-xs-12">
                        <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                            <img src="images/iphone3.png" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                            <h1>Description First Layout</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt efficitur vestibulum. Phasellus nisl leo, congue eu malesuada lobortis, fringilla et nulla.</p>

                            <div class="right_desc_bottom_text">
                                <div class="right_single_bottom_text">
                                    <i class="fa fa-shield"></i>
                                    <div class="right_bottom_description">
                                        <h6>Hundreds of Icons</h6>
                                        <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                    </div>
                                </div>

                                <div class="right_single_bottom_text">
                                    <i class="fa fa-css3"></i>
                                    <div class="right_bottom_description">
                                        <h6>Hundreds of Icons</h6>
                                        <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                    </div>
                                </div>

                                <div class="right_single_bottom_text">
                                    <i class="fa fa-file-text"></i>
                                    <div class="right_bottom_description">
                                        <h6>Hundreds of Icons</h6>
                                        <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                    </div>
                                </div>

                                <div class="right_single_bottom_text">
                                    <i class="fa fa-server"></i>
                                    <div class="right_bottom_description">
                                        <h6>Hundreds of Icons</h6>
                                        <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Description Second Section -->

        <section id="description_second">
            <div class="container">
                <div class="row">
                    <div class="main_description_second_contant">
                        <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="1.5s">
                            <div class="second_heading_text top-margin">
                                <h1>Description Second Layout</h1>
                                <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                            </div>

                            <div class="second_bottom_text">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-shield"></i>
                                            <div class="right_bottom_description">
                                                <h6>Hundreds of Icons</h6>
                                                <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-css3"></i>
                                            <div class="right_bottom_description">
                                                <h6>Hundreds of Icons</h6>
                                                <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-file-text"></i>
                                            <div class="right_bottom_description">
                                                <h6>Hundreds of Icons</h6>
                                                <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="second_single_text">
                                            <i class="fa fa-server"></i>
                                            <div class="right_bottom_description">
                                                <h6>Hundreds of Icons</h6>
                                                <p>Ipsum dolor sit amet, consectetur adipiscing elit Integer tincidunt.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-md-6 col-sm-6">
                            <div class="right_desc_img center-content wow fadeInRight" data-wow-duration="1.5s">
                                <img src="images/iphone4.png" alt="" />
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- Video Section -->

        <section id="video">
            <div class="video_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="video_text center-content">
                                
                                <!-- 4:3 aspect ratio -->
                                <div class="embed-responsive embed-responsive-4by3">
                                  <iframe class="embed-responsive-item" style="border-radius:10px;" width="940" height="600" src="https://www.youtube.com/embed/a3LLp5RRt_U" frameborder="0" allowfullscreen></iframe>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>


        <!-- Description Third Section -->
        <section id="description_third">
            <div class="container">
                <div class="row">
                    <div class="main_des_third_contant">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                                <img src="images/iphone5.png" alt="" />
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 top-margin">
                            <div class="right_desc_text wow fadeIn" data-wow-duration="1.5s">
                                <h4>Description Third Layout</h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt efficitur vestibulum. Phasellus nisl leo, congue eu malesuada lobortis, fringilla et nulla. Curabitur posuere, sem nec bibendum finibus, erat turpis congue tellus, id sagittis eros purus quis odio. Etiam ut auctor mi. Nam enim augue, placerat ut pellentesque ac, dictum nec ligula. Maecenas venenatis nisi porta neque volutpat, nec vestibulum quam elementum. Nunc blandit elit in pretium ultrices.</p>

                                <p>Cras dapibus accumsan ex a luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam maximus rhoncus orci, tempor mollis purus euismod sed. Proin aliquam nibh eros, iaculis accumsan dolor tempor ac. Proin commodo elementum magna at aliquam. Donec semper libero ut ipsum pharetra eleifend. Etiam rhoncus orci metus, eget pulvinar quam lobortis.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- Apps Gallary  -->

        <section id="apps_gallery">
            <div class="container">
                <div class="row">
                    <div class="gallery_heading_text center-content">
                        <h1>App Gallery</h1>
                        <p class="description">Showcase your app screenshots into a nice carousel below. You can add as many screenshots as you want.</p>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12"> 
                        <div class="gallery_carousel center-content">
                            <div class="single_gallery">
                                <img src="images/g1.png" alt="" />
                            </div>
                            <div class="single_gallery">
                                <img src="images/g1.png" alt="" />
                            </div>
                            <div class="single_gallery">
                                <img src="images/g1.png" alt="" />
                            </div>
                            <div class="single_gallery">
                                <img src="images/g1.png" alt="" />
                            </div>
                            <div class="single_gallery">
                                <img src="images/g1.png" alt="" />
                            </div>
                            <div class="single_gallery">
                                <img src="images/g1.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <!-- Our Pricing  -->

        <section id="pricing">
            <div class="container">
                <div class="row">
                    <div class="pricing_heading_text center-content">
                        <h1>Our Pricing</h1>
                    </div>

                    <div class="main_pricing_table">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single_pricing wow fadeIn" data-wow-duration="1.5s">
                                <div class="top_text">
                                    <h4>Free</h4>
                                    <h6>For presonal use</h6>
                                    <p>Outline an app feature/benefit here. You can change the icon above icons available.</p>
                                </div>
                                <ul>
                                    <li><img src="images/tic.png" alt="" />Justo Fringilla</li>
                                    <li><img src="images/tic.png" alt="" />Mollis Sit Nullam</li>
                                    <li><img src="images/tic.png" alt="" />Ultricies Purus Amet</li>
                                    <li><img src="images/tic.png" alt="" />Cras Inceptos</li>
                                </ul>
                                <hr />
                                <div class="table_info">
                                    <div class="info_head_text">
                                        <sub>$</sub>0<span>/per month</span>
                                    </div>
                                    <a href="" class="btn-sm">sign up</a> <a href="" class="info_right_text">Free Forever</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single_pricing economy_table wow fadeIn" data-wow-duration="1.6s">
                                <div class="top_text">
                                    <h4>Economy</h4>
                                    <h6>More awesome photo filters</h6>
                                    <p>Outline an app feature/benefit here. You can change the icon above icons available.</p>
                                </div>
                                <ul>
                                    <li><img src="images/tic.png" alt="" />Justo Fringilla</li>
                                    <li><img src="images/tic.png" alt="" />Mollis Sit Nullam</li>
                                    <li><img src="images/tic.png" alt="" />Ultricies Purus Amet</li>
                                    <li><img src="images/tic.png" alt="" />Cras Inceptos</li>
                                </ul>
                                <hr />
                                <div class="table_info">
                                    <div class="info_head_text">
                                        <sub>$</sub>29<span>/per month</span>
                                    </div>
                                    <a href="" class="btn-sm">sign up</a> <a href="" class="info_right_text">Best for individuals</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single_pricing wow fadeIn" data-wow-duration="1.8s">
                                <div class="top_text">
                                    <h4>Professional</h4>
                                    <h6>Include your business watermark</h6>
                                    <p>Outline an app feature/benefit here. You can change the icon above icons available.</p>
                                </div>
                                <ul>
                                    <li><img src="images/tic.png" alt="" />Justo Fringilla</li>
                                    <li><img src="images/tic.png" alt="" />Mollis Sit Nullam</li>
                                    <li><img src="images/tic.png" alt="" />Ultricies Purus Amet</li>
                                    <li><img src="images/tic.png" alt="" />Cras Inceptos</li>
                                </ul>
                                <hr />
                                <div class="table_info">
                                    <div class="info_head_text">
                                        <sub>$</sub>54<span>/per month</span>
                                    </div>
                                    <a href="" class="btn-sm">sign up</a> <a href="" class="info_right_text">Best for team</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Testimonial  -->

        <section id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="main_testimonial_text center-content">
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                        <div class="col-md-12 col-sm-12 single_testimonial_text item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris quis nostrud nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="">Jhone Due, Photographer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Clients logo Section  -->

        <section id="clientsLogo">
            <div class="container">
                <div class="row">
                    <div class="client_heading_text center-content wow zoomIn" data-wow-duration="1.5s">
                        <h1>As Seen On</h1>

                        <a href=""><img src="images/c1.png" alt="" /></a>
                        <a href=""><img src="images/c2.png" alt="" /></a>
                        <a href=""><img src="images/c3.png" alt="" /></a>
                        <a href=""><img src="images/c4.png" alt="" /></a>
                        <a href=""><img src="images/c5.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Download Section  -->

        <section id="downloadApps">
            <div class="container">
                <div class="row">
                    <div class="download_heading_text center-content">
                        <h1>Download the App</h1>
                        <p>Phasellus nisl leo congue eu malesuada lobortis fringilla et nulla. Curabitur posuere sem nec bibendum finibus.</p>

                        <div class="down_text_des wow fadeInUp" data-wow-duration="1.5s">
                            <a href=""><img src="images/d1.png" alt="" /></a>
                            <a href=""><img src="images/d2.png" alt="" /></a>
                            <a href=""><img src="images/d3.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Subscribe Section  -->

        <section id="subscribe">
            <div class="subcribe_overlay">
                <div class="container">
                    <div class="row">
                        <div class="subscribe_heading_text center-content">
                            <div class="subscribe_heading_title wow fadeIn" data-wow-duration="1s">
                                <h1>Subscribe Now</h1>
                                <p>Get latest news and offers curabitur posuere.</p>
                            </div>

                            <div class="subcribe_form center-content">
                                <input type="text" placeholder="Email Address">
                                <input type="submit" text="Subscribe"></i></input>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>


        <!-- message section -->

        <section id="message">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="message_content">
                            <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                                <h2>Get in Touch</h2>
                                <p>Have feedback, suggestion, or any thought about our app? Feel free to contact us anytime, we will get back to you in 24 hours.</p>
                            </div>

                            <form action="#" id="formid" class="wow fadeIn" data-wow-duration="2s">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div> <!-- end of form-group -->

                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="8" placeholder="Message"></textarea>
                                    </div>

                                    <div class="center-content">
                                        <input type="submit" value="Submit" class="btn larg-btn">
                                    </div>
                                </div>
                            </form>         
                        </div>
                    </div>
                </div>


            </div> <!-- end of container -->
        </section>


        @include('partials.footer')



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>
    </body>
</html>
