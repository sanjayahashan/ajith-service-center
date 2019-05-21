@extends('layouts.app')

@section('content')

<section class="project-detail">
        <div class="auto-container">
            <!-- Upper box -->
            <div class="upper-box">
                <div class="row clearfix">
                    <div class="image-column col-lg-8 col-md-12 col-sm-12">
                       <div class="image-box"><img src="{{ asset('/storage/photos/vehicles/' . $vehicle->image ) }}" alt="{{$vehicle->model}}"></div>
                    </div>
                    <div class="price-column col-lg-4 col-md-12 col-sm-12">
                        <h2>{{$vehicle->brand}} - {{$vehicle->model}}</h2>
                        <ul class="price-list">
                            <li>Engine Capacity <span>{{$vehicle->engine}} CC</span></li>
                            <li>Max Power <span>{{$vehicle->power}} LKR</span></li>
                            <li>Fuel Consumption <span>{{$vehicle->milage}} kmpl</span></li>
                            <li>Starting Mechanism <span>{{$vehicle->smec}} </span></li>
                            <li>Ignition <span>{{$vehicle->ignition}}</span></li>
                            <li>Transmission <span>{{$vehicle->transmission}}</span></li>
                            <li>Price <span>{{$vehicle->price}} LKR</span></li>
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

@include('ads.index')

@endsection