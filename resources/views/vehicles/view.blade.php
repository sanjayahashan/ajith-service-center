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
                            <li>Max Power <span>{{$vehicle->power}} CC</span></li>
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
             
        </div>
    </section>

@include('ads.index')

@endsection