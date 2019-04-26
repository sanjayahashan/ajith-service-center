<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/motor-expert/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2019 09:52:49 GMT -->
<head>
<meta charset="utf-8">
<title>Ajith motors</title>

<!-- Stylesheets -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/settings.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
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
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                                <li>No 1 yamaha motor bike dealer in srilanka</li>
                            </ul>
                        </div>
                        <div class="top-right clearfix">
                            <p><i class="fa fa-phone-volume"></i> Contact us 277965823</p>
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
                            <div class="logo"><img src="{{ asset('images/logo-2.png') }}" alt=""></div>
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
                                        <li><a href="{{ route('home1') }}">Home</a>
                                            
                                        </li>
                                        <li><a href="{{ route('showroom') }}">Showroom</a>
                                            
                                        </li>
                                        <li class="dropdown"><a href="#">Service center</a>   </li>
                                        <li>
                                            <a href="{{ route('appointments.create') }}">Appointments</a>

                                        </li>
                                        
                                        
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        @guest
                                            <li><a href="{{ route('login') }}">{{ __('LOGIN') }}</a></li>
                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">{{ __('REGISTER') }}</a></li>
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
                        <a href="index-2.html" class="img-responsive"><img src="{{ asset('images/logo-small.png') }}" alt="" title=""></a>
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
                                    <li><a href="#">HOME</a>
                                        
                                    </li>
                                    <li><a href="#">SHOWROOM</a>
                                        
                                    </li>
                                    <li><a href="#">SERVICE CENTER</a>
                                        
                                    </li>
                                    <li><a href="#">APPOINTMENTS</a>
                                        
                                    </li>
                                    <li><a href="#">CONTACT</a> </li>
                                        
                                    @guest
                                            <li><a href="{{ route('login') }}">{{ __('LOGIN') }}</a></li>
                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">{{ __('REGISTER') }}</a></li>
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
                        </nav><!-- Main Menu End-->
                    </div>
                    
                </div>
            </div>
            <!--End Sticky Header-->
        </header>
        <!--End Main Header -->
     <div class="down">
     <body>
     @yield('content')
     </body>
        
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="background-image: url({{ asset('images/background/4.jpg') }});">
            <div class="auto-container">
            
                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">
                        <!--Footer Column-->
                        <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="index-2.html"><img src="{{ asset('images/footer-logo.png') }}" alt=""></a>
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
                                            <a href="{{ asset('images/resource/feature-1.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('images/resource/insta-1.jpg') }}" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="{{ asset('images/resource/feature-2.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('images/resource/insta-2.jpg') }}" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="{{ asset('images/resource/feature-3.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('images/resource/insta-3.jpg') }}" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="{{ asset('images/resource/feature-4.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('images/resource/insta-4.jpg') }}" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="{{ asset('images/resource/news-1.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('images/resource/insta-5.jpg') }}" alt=""></a>
                                        </figure>

                                        <figure class="image">
                                            <a href="{{ asset('images/resource/news-2.jpg') }}" class="lightbox-image" title="Image Title Here"><img src="{{ asset('images/resource/insta-6.jpg') }}" alt=""></a>
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
                        
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Main Footer -->

    <!--Scroll to top-->
    
        
        
        
        
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
    <script src="{{ asset('js/map-script.js') }}"></script>
    <!--End Google Map APi-->
    <script src="{{ asset('js/color-settings.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @yield('scripts')

    </div>    
    <!--End pagewrapper-->
</body>
</html>