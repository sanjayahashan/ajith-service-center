<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/motor-expert/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2019 09:52:49 GMT -->
<head>
<meta charset="utf-8">
<title>Motor Expert - Auto Repair & Service HTML Template | Home Page Three</title>

<!-- Stylesheets -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/settings.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{ asset('css/color-switcher-design.css') }}" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="{{ asset('css/default-theme.css') }}" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>
 	
        <!-- Main Header-->
        <header class="main-header header-style-three">
            
            <!--Header Top-->
            <div class="header-top">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <div class="top-left">
                            <ul class="clearfix">
                                <li>Autocare is your one stap solution for all auto repair needs!</li>
                                <li><a href="appointment.html">Get a Free Auto Checkup Now <i class="fa fa-long-arrow-alt-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="top-right clearfix">
                            <p><i class="fa fa-phone-volume"></i> 24/7 Support  0700 125 3657</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->
    
            <!-- Header Lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="main-box clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <div class="logo"><a href="index-2.html"><img src="{{ asset('images/logo-2.png') }}" alt=""></a></div>
                        </div>
                        <!--outer Box-->
                            <div class="outer-box">
                                <!-- Cart Btn -->
                                <div class="cart-btn">
                                    <a href="shop.html" title="">
                                        <i class="flaticon-shopping-bag-1"></i>
                                        <span class="count">2</span>
                                    </a>
                                </div>
    
                                <!--Search Box-->
                                <div class="dropdown dropdown-outer">
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="http://expert-themes.com/html/motor-expert/blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--End outer Box-->
                        <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Homepage One</a></li>
                                                <li><a href="index-3.html">Homepage Two</a></li>
                                                <li><a href="index-4.html">Homepage Three</a></li>
                                                <li class="dropdown"><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index-2.html">Header Style One</a></li>
                                                        <li><a href="index-3.html">Header Style Two</a></li>
                                                        <li><a href="index-4.html">Header Style Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">About</a>
                                            <ul>
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li><a href="appointment.html">Appointment</a></li>
                                                <li><a href="team.html">Team</a></li>
                                                <li><a href="price.html">Price</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="services.html">Services 01</a></li>
                                                <li><a href="services-2.html">Services 02</a></li>
                                                <li><a href="service-detail.html">Services Single</a></li>  
                                            </ul>
                                        </li>
                                        <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                            <div class="mega-menu">
                                                <div class="mega-menu-bar row clearfix">
                                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                                        <h3>About Us</h3>
                                                        <ul>
                                                            <li><a href="team.html">Team</a></li>
                                                            <li><a href="team-single.html">Team Single</a></li>
                                                            <li><a href="testimonials.html">Testimonial</a></li>
                                                            <li><a href="faq.html">FAQ's</a></li>
                                                            <li><a href="comming-soon.html">Coming Soon</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                                        <h3>Solutions</h3>
                                                        <ul>
                                                            <li><a href="services-single.html">Solutions</a></li>
                                                            <li><a href="services-single.html">Chemical Engineering</a></li>
                                                            <li><a href="services-single.html">Energy & Power Engineering</a></li>
                                                            <li><a href="services-single.html">Oil & Gas Engineering</a></li>
                                                            <li><a href="services-single.html">Civil Engineering</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                                        <h3>Blog</h3>
                                                        <ul>
                                                            <li><a href="blog.html">Our Blog</a></li>
                                                            <li><a href="blog-classic.html">Blog Classic</a></li>
                                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                            <li><a href="blog-detail.html">Blog Details</a></li>
                                                        </ul>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                        <li class="dropdown"><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Products</a></li>
                                                <li><a href="shop-single.html">Products Detail</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="login.html">Registration</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        @guest
                                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                            @endif
                                        @else
                                        <li class="dropdown"><a href="#">{{ Auth::user()->name }}</a>
                                            <ul>
                                                <li><a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}</a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                        @endguest
                                    </ul>
                                </div>
    
                            </nav>
                            <!-- Main Menu End-->
                            
                        </div>
                    </div>
                
            </div>
            <!-- End Header Lower -->
            
            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="index-2.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                    </div>
                        
                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu  navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="#">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Homepage One</a></li>
                                            <li><a href="index-3.html">Homepage Two</a></li>
                                            <li><a href="index-4.html">Homepage Three</a></li>
                                            <li class="dropdown"><a href="#">Header Styles</a>
                                                <ul>
                                                    <li><a href="index-2.html">Header Style One</a></li>
                                                    <li><a href="index-3.html">Header Style Two</a></li>
                                                    <li><a href="index-4.html">Header Style Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">About</a>
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="appointment.html">Appointment</a></li>
                                            <li><a href="team.html">Team</a></li>
                                            <li><a href="price.html">Price</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Projects</a>
                                        <ul>
                                            <li><a href="project.html">Project</a></li>
                                            <li><a href="project-detail.html">Project Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            <li><a href="services.html">Services 01</a></li>
                                            <li><a href="services-2.html">Services 02</a></li>
                                            <li><a href="service-detail.html">Services Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                        <div class="mega-menu">
                                            <div class="mega-menu-bar row clearfix">
                                                <div class="column col-md-3 col-sm-3 col-xs-12">
                                                    <h3>About Us</h3>
                                                    <ul>
                                                        <li><a href="team.html">Team</a></li>
                                                        <li><a href="team-single.html">Team Single</a></li>
                                                        <li><a href="testimonials.html">Testimonial</a></li>
                                                        <li><a href="faq.html">FAQ's</a></li>
                                                        <li><a href="comming-soon.html">Coming Soon</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-md-3 col-sm-3 col-xs-12">
                                                    <h3>Solutions</h3>
                                                    <ul>
                                                        <li><a href="services-single.html">Solutions</a></li>
                                                        <li><a href="services-single.html">Chemical Engineering</a></li>
                                                        <li><a href="services-single.html">Energy & Power Engineering</a></li>
                                                        <li><a href="services-single.html">Oil & Gas Engineering</a></li>
                                                        <li><a href="services-single.html">Civil Engineering</a></li>
                                                    </ul>
                                                </div>
                                                <div class="column col-md-3 col-sm-3 col-xs-12">
                                                    <h3>Blog</h3>
                                                    <ul>
                                                        <li><a href="blog.html">Our Blog</a></li>
                                                        <li><a href="blog-classic.html">Blog Classic</a></li>
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                        <li><a href="blog-detail.html">Blog Details</a></li>
                                                    </ul>
                                                </div>
                                                
                                                <div class="column col-md-3 col-sm-3 col-xs-12">
                                                    <h3>Shop</h3>
                                                    <ul>
                                                        <li><a href="shop.html">Shop</a></li>
                                                        <li><a href="shop-single.html">Product Details</a></li>
                                                        <li><a href="shoping-cart.html">Cart Page</a></li>
                                                        <li><a href="checkout.html">Checkout Page</a></li>
                                                        <li><a href="login.html">Registration Page</a></li>
                                                    </ul>
                                                </div>
    
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown"><a href="#">News</a>
                                        <ul>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="blog-detail.html">News Detail</a></li>
                                            <li><a href="error-page.html">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Products</a></li>
                                            <li><a href="shop-single.html">Products Detail</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="login.html">Registration</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>
                    
                </div>
            </div>
            <!--End Sticky Header-->
        </header>
        <!--End Main Header -->

        @yield('content')

        <!-- Main Footer -->
        <footer class="main-footer" style="background-image: url(images/background/4.jpg);">
            <div class="auto-container">
            
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="index-2.html"><img src="images/footer-logo.png" alt=""></a>
                                    </figure>
                                </div>
                                <div class="widget-content">
                                    <div class="text">How to pursue pleasure rationally thats encounter consequences that extremely painful. Nor again is there anyones who loves or pursues or ut desires obtains pain of itself, because.</div>
                                    <h4>Follow Us:</h4>
                                    <ul class="social-icon">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!--Footer Column-->
                        <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget services-widget">
                                <h2 class="widget-title">Our Services</h2>
                                <div class="widget-content">
                                    <ul class="services-list">
                                        <li><a href="#">Engine Diagnostic & Repair</a></li>
                                        <li><a href="#">Maintanence Inspaection</a></li>
                                        <li><a href="#">Electrical System Diagnostic</a></li>
                                        <li><a href="#">Wheel Allignment & Installation</a></li>
                                        <li><a href="#">Air Conditioner Service & Repair</a></li>
                                    </ul>
                                </div>
                            </div>  
                        </div>                  

                        <!--Footer Column-->
                        <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                            <!--Footer Column-->
                            <div class="footer-widget gallery-widget">
                                <h2 class="widget-title">Instragram</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <div class="outer clearfix">
                                        <figure class="image">
                                            <a href="images/resource/feature-1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-1.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="images/resource/feature-2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-2.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="images/resource/feature-3.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-3.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="images/resource/feature-4.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-4.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="images/resource/news-1.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-5.jpg" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="images/resource/news-2.jpg" class="lightbox-image" title="Image Title Here"><img src="images/resource/insta-6.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                </div>       
                            </div>
                        </div>


                        <!--Footer Column-->
                        <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                            <!--Footer Column-->
                            <div class="footer-widget news-widget">
                                <h2 class="widget-title">Latest News</h2>
                                <!--Footer Column-->
                                <div class="widget-content">
                                    <div class="post">
                                        <h4><a href="#">Get Usefull Car Maintanence Tips From Our Expets</a></h4>
                                        <span class="date"><i class="far fa-calendar-check"></i>Aug 21, 2015</span>
                                    </div>

                                    <div class="post">
                                        <h4><a href="#">Get Usefull Car Maintanence Tips From Our Expets</a></h4>
                                        <span class="date"><i class="far fa-calendar-check"></i>Aug 21, 2015</span>
                                    </div>
                                </div>       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="copyright-text">
                        <p>Copyrights © 2018 All Rights Reserved. by <a href="#"> Expert Themes</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Main Footer -->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

    <!-- Color Palate / Color Switcher -->
    <div class="color-palate">
        <div class="color-trigger">
            <i class="fa fa-cog"></i>
        </div>
        <div class="color-palate-head">
            <h6>Choose Your Color</h6>
        </div>
        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                <span class="palate yellow-color" data-theme-file="css/color-themes/blue-theme.css"></span>
                <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
            </div>
        </div>
        
        <a href="#" class="purchase-btn">Purchase now $15</a>
        
        <div class="palate-foo">
            <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>
        </div>
    </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--Revolution Slider-->
    <script src="{{ asset('js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('js/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('js/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('js/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('js/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('js/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('js/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('js/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('js/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('js/revolution.extension.video.min.js') }}"></script>
    <script src="{{ asset('js/main-slider-script.js') }}"></script>
    <!--End Revolution Slider-->
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('js/owl.js') }}"></script>
    <script src="{{ asset('js/appear.js') }}"></script>
    <script src="{{ asset('js/wow.js') }}"></script>
    <script src="{{ asset('js/mixitup.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->
    <script src="js/color-settings.js"></script>

    </div>    
    <!--End pagewrapper-->
</body>
</html>