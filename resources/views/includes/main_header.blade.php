<header class="main-header">

    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="top-left">
                    <ul class="clearfix">
                        <li><b>Welcome to Ajith motors</b></li>
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
                        <li><strong>Service centre: </strong> 34/A Hokandara road,Thalawathugoda</li>
                            <li><strong>Showroom Thalawathugoda :</strong> No 23,kottawa road, Thalawathugoda</li>
                            <li><strong>Showroom malabe: </strong> No 418/1/c Athurugiriya road, Malabe</li>
                        </ul>
                        </div>
                    
                    <!--Info Box-->

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
                            <li>
                                <a href="{{ route('appointments.create') }}">Service Appointments</a>

                            </li>


                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            @guest
                            @if (Route::has('login'))
                            <li><a href="{{ route('login') }}">LOGIN / REGISTER</a></li>
                            @endif
                            @else

                            <li class="dropdown"><a href="#">{{ Auth::user()->name }}</a>
                                <ul>
                                @if(Auth::user()->isAdmin)
                                    <li>
                                        <a href="{{ route('admin.adweb') }}">Admin Dashboard</a>
                                    </li>
                                    @endif
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
                            <li><a href="{{ route('home') }}">HOME</a>

                            </li>
                            <li><a href="{{ route('showroom') }}">SHOWROOM</a>

                            </li>
                            <li>
                                <a href="{{ route('appointments.create') }}">SERVICE APPOINTMENTS</a>

                            </li>


                            <li><a href="{{ route('contact') }}">CONTACT</a></li>
                            @guest
                            @if (Route::has('login'))
                            <li><a href="{{ route('login') }}">{{ __('LOGIN') }}</a></li>
                            @endif
                            @else
                            <li><a href="{{ route('reserv') }}">RESERVED APPOINTMENTS</a></li>
                            <li class="dropdown"><a href="#">{{ Auth::user()->name }}</a>
                                <ul>
                                    @if(Auth::user()->isAdmin)
                                    <li>
                                        <a href="{{ route('admin.adweb') }}">Admin Dashboard</a>
                                    </li>
                                    @endif
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
