@extends('layouts.app')

@section('content')
<style>
#block{
    margin-left: 70%;
    
}
#cd{
  margin-left: 20%;
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
#p1{
  color: black;
  font-size: 20px;
  
}
#p2{
  color: red;
}
</style>
<br>
<div class="auto-container">
<div class="row clearfix">
<div class="column col-lg-6 col-md-12 col-sm-12">
<div class="card" id="cd" style="width:400px">
  <img class="card-img-top" src="../images/credit.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"></h4>
    <p id="p1" class="card-text">You will be charged <b>Rs 500</b> for reservation.</p>
    <p id="p2" class="card-text">Please note that we will <b>NOT REFUND</b> your money after canceling
  reservation. </p>
  <p id="p3" class="card-text">This payment is only for reserve a timeslot.. Your full payment will be
    change according to service you get.
  </p>
  </div>
</div>
</div>

<div class="column col-lg-6 col-md-12 col-sm-12" >
    <div class="row">
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
                    @csrf
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
</div>
<br>


@endsection
@section('scripts')
<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
<script type="text/javascript" src="{{ asset('js/chekout.js') }}"></script>
@endsection