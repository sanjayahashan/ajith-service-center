@extends('layouts.app')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">            
                <h1>Appointment</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Appointment</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Appointment Page-->
    <div class="appointment-page">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Make an <span>Appointment</span></h2>
                <p>We are one of the leading auto repair shops serving customers in Tucson. All mechanic services<br> are performed by highly qualified mechanics.</p>
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
                        <div class="title"><h3>Select Services Needed</h3></div>
                        <div class="row clearfix">
                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-1"> 
                                    <label for="service-1">Air Conditioning </label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-2"> 
                                    <label for="service-2">Brakes Repair </label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-3"> 
                                    <label for="service-3">Engine Diagnostic</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-4"> 
                                    <label for="service-4">Heating & Cooling</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-5"> 
                                    <label for="service-5">Oil, Lube</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-6"> 
                                    <label for="service-6">Steering & Suspension</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-7"> 
                                    <label for="service-7">Transmission Repair</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-8"> 
                                    <label for="service-8">Battery Service</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-9"> 
                                    <label for="service-9">Exhaust Systems</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-10"> 
                                    <label for="service-10">Emissions</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-11"> 
                                    <label for="service-11">Pvt Maintenance</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-12"> 
                                    <label for="service-12">Tire Pressure</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-13"> 
                                    <label for="service-13">Tire Service</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-14"> 
                                    <label for="service-14">Other</label>
                                </div>
                            </div> 

                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">Reserve Appointment</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!--End Appointment Form-->

            

        </div>
    </div>
    <!--End Appointment Page-->

    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h3>Check out our repair service for your car and get a free clean</h3>
                <a href="#" class="call-btn">Order Now</a>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        // console.log(timeslots);
        $("#date").change(function(e) {
            var timeslots = ["9.00-9.45", "9.45-10.30", "10.30-11.15", "11.15-12.00", "12.00-12.45", "1.45-2.30", "2.30-3.15", "3.15-4.00", "4.00-4.45"];
            e.preventDefault();
            $('#time').empty();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '{{ route('appointments.times') }}',
                type: 'post',
                data: {
                    date: $('#date').val(),
                },
                success: function(data) {
                    // console.log(data[0].time);
                    if(data.length>0)
                    {
                        data.forEach(function(value) {
                            if(timeslots.includes(value.time))
                            {
                                var i = timeslots.indexOf(value.time);
                                timeslots.splice(i, 1);
                            }
                        });
                        console.log(timeslots);
                        var $dropdown = $('#time');
                    }
                },
                complete: function() {
                    for (var i of timeslots)
                    {
                        var opt = document.createElement("option");
                        opt.value = i;
                        opt.innerHTML = i;
                        $('#time').append(opt);
                        console.log(i);
                    }
                }
            });
        });
    });
</script>
@endsection