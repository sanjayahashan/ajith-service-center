<header class="main-header">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <ul class="clearfix">
                        <li>Welcome to Our Auto Work Repair Service</li>
                    </ul>
                </div>
                <div class="top-right clearfix">
                    <ul class="social-icon-one clearfix">
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                        <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left logo-outer">
                    <div class="logo"><a href="/"><img src="{{ asset('images/logo.png') }}" alt=""
                                title=""></a></div>
                </div>
                <div class="pull-right upper-right clearfix">
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-home"></span></div>
                        <ul>
                            <li><strong>34/A Hokandara road</strong></li>
                            <li>Thalawathugoda, Colombo</li>
                        </ul>

                    </div>
                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-mail-1"></span></div>
                        <ul>
                            <li><strong>Send your mail at</strong></li>
                            <li><a href="#">Ajithmotors@gmail.com</a></li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-clock"></span></div>
                        <ul>
                            <li><strong>Working Hours</strong></li>
                            <li>Mon-Sat:9.30am to 7.00pm</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Header Lower-->
    <div class="header-lower">

        <div class="auto-container">
            <div class="nav-outer clearfix">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">

                            <li><a href="/">Home</a>

                            </li>
                            <li><a href="{{ route('showroom') }}">Showroom</a>

                            </li>
                            <li class="dropdown"><a href="#">Service center</a> </li>
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
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
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

                <!--Search Box-->
                <div class="search-box-outer">
                    <!--Search Box-->
                    <div class="dropdown dropdown-outer">
                        <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                class="fa fa-search"></span></button>
                        <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                            <li class="panel-outer">
                                <div class="form-container">
                                    <form method="post" action="http://expert-themes.com/html/motor-expert/blog.html">
                                        <div class="form-group">
                                            <input type="search" name="field-name" value="" placeholder="Search Here"
                                                required="">
                                            <button type="submit" class="search-btn"><span
                                                    class="fa fa-search"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--End earch Box-->

            </div>
        </div>
    </div>
    <!--End Header Lower-->

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
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li><a href="{{ route('home') }}">Home</a>

                            </li>
                            <li><a href="{{ route('showroom') }}">Showroom</a>

                            </li>
                            <li class="dropdown"><a href="#">Service center</a> </li>
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
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
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
