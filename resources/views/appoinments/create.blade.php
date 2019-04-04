@extends('layouts.app')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">            
                <h1>Appointment</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
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
                <form>
                    <div class="vehicle-detail">
                        <div class="row clearfix">
                            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="title"><h3>Vehicle Year</h3></div>
                                <div class="range-slider-one clearfix">
                                    <div class="vehicle-year-slider"></div>
                                    <div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
                                </div>
                            </div>

                            <div class="form-group col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="title"><h3>Vehicle Make</h3></div>
                                <div class="field-inner">
                                    <select class="custom-select-box">
                                        <option>Choose Now</option>    
                                        <option>Choose Now</option>
                                        <option>Choose Now</option>
                                        <option>Choose Now</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="title"><h3>Vehicle Mileage</h3></div>
                                <input type="text" name="v-mileage" placeholder="Vehicle Mileage">
                            </div>

                            <div class="form-group col-lg-6 col-md-4 col-sm-6 col-xs-12">
                                <div class="title"><h3>Appointment Date</h3></div>
                                <div class="field-inner">
                                    <select class="custom-select-box">
                                        <option>Preffered Date of Appointment</option>    
                                        <option>Preffered Date of Appointment</option>
                                        <option>Preffered Date of Appointment</option>
                                        <option>Preffered Date of Appointment</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group col-lg-6 col-md-4 col-sm-12 col-xs-12">
                                <div class="title"><h3>Preffered Time Frame</h3></div>
                                <div class="field-inner">
                                    <select class="custom-select-box">
                                        <option>Choose Time</option>    
                                        <option>Choose Time</option>
                                        <option>Choose Time</option>
                                        <option>Choose Time</option>
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
                        </div>
                    </div>
                </form>
            </div><!--End Appointment Form-->

            <!--Contact Form-->
            <div class="contact-form">
                <div class="title"><h3>Contact Details</h3></div>
                <form>
                    <div class="row clearfix">
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="name" placeholder="Enter Your Name">
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="email" name="email" placeholder="Enter Your Email Address">
                        </div>

                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            <input type="text" name="subject" placeholder="Enter Your Subject">
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea placeholder="Additional Questions or Comments"></textarea>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button type="submit" class="theme-btn">Submit Now</button>
                        </div>
                    </div>
                </form>
            </div><!--End Contact Form-->

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