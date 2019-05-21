<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/motor-expert/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2019 09:52:18 GMT -->
<head>
<meta charset="utf-8">
<title>Motor Expert - Auto Repair & Service HTML Template | Home Page One</title>

<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/revolution/css/settings.cs') }}s" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

<!--Color Switcher Mockup-->
<link href="{{ asset('css/color-switcher-design.css') }}" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="{{ asset('css/color-themes/default-theme.css') }}" rel="stylesheet">

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

<!-- Preloader -->
<div class="preloader"></div>
 	
     <!-- Main Header-->
     @include('includes.main_header')
     <!--End Main Header -->

@yield('content')

    <!-- Main Footer -->
   @include('includes.main_footer')
    <!-- End Main Footer -->

</div>    
<!--End pagewrapper-->

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
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<!--Revolution Slider-->
<script src="{{ asset('plugins/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('plugins/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('js/main-slider-script.js') }}"></script>
<!--End Revolution Slider-->
<script src="{{ asset('js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('js/owl.js') }}"></script>
<script src="{{ asset('js/appear.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/mixitup.js') }}"></script>
<script src="{{ asset('js/validate.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCCpByEfDzq9WBQY_0I7HEB3hVE_MHpI-0"></script>
<script src="{{ asset('js/map-script.js') }}"></script>
<!--End Google Map APi-->
<script src="{{ asset('js/color-settings.js') }}"></script>
</body>

<!-- Mirrored from expert-themes.com/html/motor-expert/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2019 09:52:18 GMT -->
</html>