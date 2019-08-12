$(document).ready(function(){
    var stripe = Stripe('pk_test_ft9SEHcKa11dg7CAQKFgDdAP00O5pkHADD');
    var elements = stripe.elements();
      
        // Try to match bootstrap 4 styling
        var style = {
          base: {
            'lineHeight': '1.35',
            'fontSize': '1.11rem',
            'color': '#495057',
            'fontFamily': 'apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif'
          }
        };
      
        // Card number
        var card = elements.create('cardNumber', {
          'placeholder': '',
          'style': style
        });
        card.mount('#card-number');
      
        // CVC
        var cvc = elements.create('cardCvc', {
          'placeholder': '',
          'style': style
        });
        cvc.mount('#card-cvc');
      
        // Card number
        var exp = elements.create('cardExpiry', {
          'placeholder': '',
          'style': style
        });
        exp.mount('#card-exp');
      
        // Submit
        $('#payment-submit').on('click', function(e){
          e.preventDefault();
          var cardData={
            //'number':$('#card-number').val(),
            //'cvc':$('#card-cvc').val(),
            //'expire':$('#card-exp').val(),
            'name':$('#name').val()
           };
          stripe.createToken(card, cardData).then(function(result) {
            console.log(result);
            if(result.error && result.error.message){
              alert(result.error.message);
            }else{
              alert(result.token.id);
              stripeTokenHandler(result.token);
            }
          });
        });
      
      });

function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
  
    // Submit the form
    form.submit();
    console.log('blaaa');
  }
