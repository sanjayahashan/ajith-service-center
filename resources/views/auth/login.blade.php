@extends('layouts.app')

@section('content')
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">            
                <h1>Registration</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Registration</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Login Section-->
    <section class="login-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Login Form -->
                    <h2>Login</h2>
                    <div class="login-form">
                        <!--Login Form-->
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="form-group">
                                <label>Username or Email Address</label>
                                <input type="text" name="email" placeholder="Name or Email " class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="password" name="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div> 
                            
                            <div class="clearfix">
                                <div class="pull-right">
                                    <div class="form-group text-right">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">LOGIN</button>
                                    </div>
                                </div>
                                <div class="pull-left">
                                    <div class="form-group remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>&nbsp; <label for="remember">Remember me</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="psw">Lost your password?</a>
                                    @endif
                                    </div>
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                    <!--End Login Form -->
                </div>

                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h2>Register</h2>
                    <!-- Register Form -->
                    <div class="login-form">
                        <!--Register Form-->
                        <form method="post" action="{{route('register')}}">
                        @csrf

                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="janedoe@mail.com" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                            <label>{{ __('Phone Number') }}</label>
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="07XXXXXXXX" required>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label>Enter Your Password</label>
                                <input type="password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            
                            <div class="clearfix">
                                <div class="pull-right">
                                    <div class="form-group text-right">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Register</button>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </form>
                    </div>
                    <!--End Register Form -->
                </div>
            </div>
        </div>
    </section>
    <!--End Login  Section-->
	
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