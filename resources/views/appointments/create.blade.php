@extends('layouts.app')

@section('content')
@if(Session::has('success'))
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <div id="charge-message" class="alert alert-success">
            {{session::get('success')}}
        </div>
    </div>
</div>
@endif

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/background/8.jpg') }});">
        <div class="auto-container">
            <div class="inner-container clearfix">            
                <h1>Appointment</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Appointment Page-->
    <div class="appointment-page">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Make an <span>Appointment</span></h2>
                <p>We are one of the leading bike repair shops serving customers in Sri Lanka. All mechanic services<br> are performed by highly qualified mechanics.</p>
            </div>

            <!-- Service form-->
            <div class="service-form">
                <form action="{{ route('appointments.store') }}" method="post">
                @csrf
                    <div class="vehicle-detail">
                        <div class="row clearfix">
                            

                            <div class="form-group col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                <div class="title"><h3>Appointment Date</h3></div>
                                <div class="field-inner">
                                    <input id="date" type="date" name="date" min="2019">
                                </div>
                            </div>

                            <div class="form-group col-lg-6 col-md-4 col-sm-12 col-xs-12">
                                <div class="title"><h3>Preffered Time Frame</h3></div>
                                <div class="field-inner">
                                    <select id="time" name="time" class="custom-select-box">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="services-needed">
                        <div class="title"><h3>Our Services</h3></div>
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

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">Reserve Appointment</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="{{route('payment') }}" class="theme-btn btn-style-one" type="submit" name="submit-form">Reserve Appointment</a>
            </div><!--End Appointment Form-->

            

        </div>
    </div>
    <!--End Appointment Page-->

    <!-- Subscribe Section -->
    
    <!-- End Subscribe Section -->

@endsection

@section('scripts')

<script>

    function populate() {
            var timeslots = ["9.00-9.45", "9.45-10.30", "10.30-11.15", "11.15-12.00", "12.00-12.45", "1.45-2.30", "2.30-3.15", "3.15-4.00", "4.00-4.45"];
            // e.preventDefault();
            $('#time').empty();
            _populate(timeslots);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('appointments.count') }}',
                type: 'post',
                data: {
                    date: $('#date').val(),
                    time: $('#time').val(),
                },
                success: function(data) {

                    for(var key in data) {
                        if(data[key].count >= data.max_count) {
                            var i = timeslots.indexOf(key);
                            timeslots.splice(i, 1);
                        }
                        console.log(data[key].count);
                    }
                },
                complete: function() {
                    $('#time').empty();
                    _populate(timeslots);
                }
            });

        }

        function _populate(timeslots) {
            for (var i of timeslots)
                {
                    var opt = document.createElement("option");
                    opt.value = i;
                    opt.innerHTML = i;
                    $('#time').append(opt);
                }
                $("#time:first").val(timeslots[0]);
                // console.log($('#time').val());
        }

    $(document).ready(function () {
        // console.log(timeslots);
        $("#date").change(populate);
    });

    $('#date').on("change", "#time", function() {
        alert("here");
    });
</script>
@endsection