@extends('layouts.app')

@section('content')

<div class="auto-container">
<div class="row">
@foreach($vehicles as $vehicle)
    <div class="shop-item col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box">
            <div class="image">
                <img src="{{asset('images/resource/products/1.jpg')}}" alt="">
                <div class="overlay-box">
                    <div class="icon-box">
                        <a href="cart.html" class="cart-btn"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                    </div>
                </div>
            </div>
            <div class="lower-content">
                <h3><a href="shop-single.html">{{$vehicle->brand}}</a></h3>
                <h4>{{$vehicle->model}}</h4>
                <span class="price">{{$vehicle->price}} LKR</span>
                <div class="rating">
                    <span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
</div>
@endsection