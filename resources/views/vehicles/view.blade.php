@extends('layouts.app')

@section('content')

<section class="project-detail">
        <div class="auto-container">
            <!-- Upper box -->
            <div class="upper-box">
                <div class="row clearfix">
                    <div class="image-column col-lg-8 col-md-12 col-sm-12">
                       <div class="image-box"><img src="{{ asset('public/storage/photos/vehicles/' . $vehicle->thumb ) }}}" alt="{{$vehicle->model}}"></div>
                    </div>
                    <div class="price-column col-lg-4 col-md-12 col-sm-12">
                        <h2>{{$vehicle->brand}} - {{$vehicle->model}}</h2>
                        <ul class="price-list">
                            <li>Axle <span>$149.95 Each</span></li>
                            <li>Front Brakes Repair <span>$49.95</span></li>
                            <li>Rear Brakes Repair <span>$59.95</span></li>
                            <li>Rear Brake Shoes <span>$65.25</span></li>
                            <li>Starters / Alternators <span>$225.95 Plus Parts</span></li>
                            <li>Blelts / Hoses <span> $65.25</span></li>
                        </ul>               
                    </div>
                </div>
            </div>

            <!-- Lower Content -->
            <div class="lower-content">
                <h2>Brief Description</h2>
                <p>{{$vehicle->description}}</p>
            </div>

            <!-- Project Info -->
             <div class="project-info">
                <div class="row clearfix">
                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="info"><span class="icon fa fa-user"></span><strong>Client :</strong> TransGas</div>
                    </div>

                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="info"><span class="icon fa fa-globe"></span><strong>Investors Website :</strong> <a href="index-2.html">www.clickhere.com</a></div>
                    </div>

                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="info"><span class="icon fa fa-calendar"></span><strong>Construction Date :</strong> October 2015</div>
                    </div>

                    <div class="column col-lg-6 col-md-6 col-sm-12">
                        <div class="social-icons">
                            <span class="follow">Share :</span>
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-google-plus-g"></span></a>
                            <a href="#"><span class="fab fa-pinterest"></span></a>
                            <a href="#"><span class="fab fa-dribbble"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection