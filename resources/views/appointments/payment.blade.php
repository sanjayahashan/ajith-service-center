@extends('layouts.app')

@section('content')
<style>
#block{
    margin-left: 50%;
    
}
.StripeElement--focus {
  border-color: #80BDFF;
}
/* Can't see what I type without this */
#card-number.form-control,
#card-cvc.form-control,
#card-exp.form-control {
  display:block;
}
</style>

<div id=block class="container" >
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div id="check-error" role="alert"></div>
                <div class="panel-body">
                    <form action="{{ route('checkout') }}" method="post" id="payment-form">
        <div class="form-group">
          <label for="name">Name on Card</label>
          <div class="input-group">
            <span class="input-group-addon"></span>
            <input type="text" class="form-control" id="name">
            <span class="input-group-addon"></span>
          </div>
        </div>
        <div class="form-group">
          <label for="card-number">Credit Card Number</label>
          <div class="input-group">
            <span class="input-group-addon"></span>
            <span id="card-number" class="form-control">
              <!-- Stripe Card Element -->
            </span>
            <span class="input-group-addon"></span>
          </div>
        </div>
        <div class="form-group">
          <label for="card-cvc">CVC Number</label>
          <div class="input-group">
            <span class="input-group-addon"></span>
            <span id="card-cvc" class="form-control">
              <!-- Stripe CVC Element -->
            </span>
          </div>
        </div>
        <div class="form-group">
          <label for="card-exp">Expiration</label>
          <div class="input-group">
            <span id="card-exp" class="form-control">
              <!-- Stripe Card Expiry Element -->
            </span>
            <span class="input-group-addon"></span>
          </div>
        </div>
        <button id="payment-submit" class="btn btn-primary">Submit Payment</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{ asset('js/chekout.js') }}"></script>
@endsection