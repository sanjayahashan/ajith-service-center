<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from expert-themes.com/html/motor-expert/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Mar 2019 09:52:18 GMT -->
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Ajith motors</title>

<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/revolution/css/settings.cs') }}s" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="{{ asset('plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="{{ asset('plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

<!--Color Switcher Mockup-->
<link href="{{ asset('css/color-switcher-design.css') }}" rel="stylesheet">

<!--Color Themes-->
<link id="theme-color-file" href="{{ asset('css/color-themes/green-theme.css') }}" rel="stylesheet">

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

@include('includes.main_header')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/background/8.jpg') }});">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <h1>Appointment</h1>
        </div>
    </div>
</section>
<!--End Page Title-->

@if(Session::has('success'))
    <div class="alert alert-primary" role="alert">
        {{ session('success') }}
    </div>
@endif

<!--Appointment Page-->
<div class="appointment-page">
    <div class="auto-container">
        <div class="sec-title">
            <h2>Make an <span>Appointment</span></h2>
            <p>We are one of the leading bike repair shops serving customers in Sri Lanka. All mechanic services<br> are
                performed by highly qualified mechanics.</p>
        </div>

        <!-- Service form-->
        <div class="service-form">
            <form action="{{ route('appointments.store') }}" method="post">
                @csrf
                <div class="vehicle-detail">
                    <div class="row clearfix">


                        <div class="form-group col-lg-6 col-md-4 col-sm-6 col-xs-12">
                            <div class="title">
                                <h3>Appointment Date</h3>
                            </div>
                            <div class="field-inner">
                                <input id="date" type="date" name="date" min="{{ date('Y-m-d', strtotime("+2 days")) }}">
                            </div>
                        </div>

                        <div class="form-group col-lg-6 col-md-4 col-sm-12 col-xs-12">
                            <div class="title">
                                <h3>Preffered Time Frame</h3>
                            </div>
                            <div class="field-inner">
                                <select id="time" name="time" class="custom-select-box">
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="services-needed">
                    <div class="title">
                        <h3>Our Services</h3>
                    </div>
                    <div class="row clearfix">

                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="check-box">
                                <input type="checkbox" name="shipping-option" id="service-2" checked disabled>
                                <label for="service-2">Brakes Repair </label>
                            </div>
                        </div>

                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="check-box">
                                <input type="checkbox" name="shipping-option" id="service-3" checked disabled>
                                <label for="service-3">Engine Diagnostic</label>
                            </div>
                        </div>

                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="check-box">
                                <input type="checkbox" name="shipping-option" id="service-4" checked disabled>
                                <label for="service-4">Heating & Cooling</label>
                            </div>
                        </div>

                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="check-box">
                                <input type="checkbox" name="shipping-option" id="service-5" checked disabled>
                                <label for="service-5">Oil, Lube</label>
                            </div>
                        </div>

                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="check-box">
                                <input type="checkbox" name="shipping-option" id="service-7" checked disabled>
                                <label for="service-7">Transmission Repair</label>
                            </div>
                        </div>

                        <div class="form-group col-lg-4 col-md-4 col-sm-6 col-xs-12">
                            <div class="check-box">
                                <input type="checkbox" name="shipping-option" id="service-12" checked disabled>
                                <label for="service-12">Tire Pressure</label>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button type="button" class="theme-btn btn-style-one" data-toggle="modal" data-target="#exampleModal">
        Reserve Appointments
    </button>
            </div>
            <!--End Appointment Form-->



        </div>
    </div>
    <!--End Appointment Page-->

    <!-- Subscribe Section -->

    <!-- End Subscribe Section -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button id="demo" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Appointment Details</h5>
                    <table>
                        <tr>
                            <td>Date</td>
                            <td id="dateCell"></td>
                        </tr>
                        <tr>
                            <td>Time</td>
                            <td id="timeCell"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="{{ route('payment') }}">
                        <input type="hidden" name="date" id="inputDate">
                        <input type="hidden" name="time" id="inputTime">
                        <button class="btn btn-primary" type="submit" name="submit-form">Proceed to Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('includes.main_footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    <script>
    $.noConflict();
        function populate() {
            var timeslots = ["9.00-9.45", "9.45-10.30", "10.30-11.15", "11.15-12.00", "12.00-12.45", "1.45-2.30",
                "2.30-3.15", "3.15-4.00", "4.00-4.45"
            ];
            // e.preventDefault();
            jQuery('#time').empty();
            _populate(timeslots);

            jQuery.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: '{{ route('appointments.count') }}',
                type: 'post',
                data: {
                    date: jQuery('#date').val(),
                    time: jQuery('#time').val(),
                },
                success: function (data) {

                    for (var key in data) {
                        if (data[key].count >= data.max_count) {
                            var i = timeslots.indexOf(key);
                            timeslots.splice(i, 1);
                        }
                        console.log(data[key].count);
                    }
                },
                complete: function () {
                    jQuery('#time').empty();
                    _populate(timeslots);
                }
            });

        }

        function _populate(timeslots) {
            for (var i of timeslots) {
                var opt = document.createElement("option");
                opt.value = i;
                opt.innerHTML = i;
                jQuery('#time').append(opt);
            }
            jQuery("#time:first").val(timeslots[0]);
            // console.log(jQuery('#time').val());
        }

        jQuery(document).ready(function () {
            // console.log(timeslots);
            jQuery("#date").change(function() {
                jQuery('#dateCell').html(jQuery('#date').val());
                jQuery('#timeCell').html(jQuery('#time').val());
                
                jQuery('#inputTime').val(jQuery('#time').val());
                jQuery('#inputDate').val(jQuery('#date').val());
                populate();
            });

            jQuery(document).on("change","#time",function() {
                jQuery('#dateCell').html(jQuery('#date').val());
                jQuery('#timeCell').html(jQuery('#time').val());

                jQuery('#inputTime').val(jQuery('#time').val());
                jQuery('#inputDate').val(jQuery('#date').val());
                console.log(jQuery(this).val());
            });
        
            
        });

    </script>

</body>
</html>