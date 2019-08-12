@extends('layouts.app')

@section('content')

<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('images/background/a4.png') }});">
        <div class="auto-container">
            <div class="inner-container clearfix">            
                <h1>Available Motor Bikes</h1>
            </div>
        </div>
    </section>

<div class="auto-container">
<div class="row">
@foreach($vehicles as $vehicle)
    <div class="shop-item col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box">
            <div class="image">
                <img src="{{ asset('storage/photos/vehicles/' . $vehicle->thumb ) }}" alt="">
                <div class="overlay-box">
                    <div class="icon-box">
                        <a href="{{ route('vehicles.show', ['id'=>$vehicle]) }}" class="cart-btn"><i class="fa fa-shopping-cart"></i> View Details</a>
                    </div>
                </div>
            </div>
            <div class="lower-content">
                <h3><a href="shop-single.html">{{$vehicle->brand}}</a></h3>
                <h4>{{$vehicle->model}}</h4>
                <span class="price">{{$vehicle->price}} LKR</span>
                <!-- <div class="rating">
                    <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                </div> -->
                @if(!Auth::guest() && Auth::user()->isAdmin)
                    <a href="{{ route('vehicles.edit',['id'=>$vehicle->id]) }}" class="btn btn-warning">Edit</a>
                    <form method="POST" action="{{ route('vehicles.destroy',['id'=>$vehicle]) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                @endif
            </div>
        </div>
    </div>
@endforeach
</div>
</div>

@include('ads.index', ['ads' => $ads])

@endsection