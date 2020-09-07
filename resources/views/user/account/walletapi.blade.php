<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="{{asset('asset/css/sweet-alert.css')}}" rel="stylesheet">
<style>
.btn {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 364px 791px;
  opacity: 1;
  transition: 0.3s;
}

.

.btn:hover {opacity: 0.6}
</style>

<script src="{{asset('asset/js/sweet-alert.js')}}"></script>
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="https://assets.pagar.me/checkout/1.1.0/checkout.js"></script>

</head>
<body>


<div class="loading-gif">
  <img id="loading-image" src="{{asset('asset/img/ajax-loader.gif')}}" style="display:none; margin: -358px 899px"/>
</div>
<button id="submit-button" class="btn">Continue To Pay {{currency($amount)}}</button>

<script type="text/javascript">

  var button = document.querySelector('#submit-button')

  button.addEventListener('click', function() {
  var amount = {{$amount}};
  var user_id = {{$user_id}};
  

  if(amount==''){
     alert("Amount is Required");
     return false;
  }
  function handleSuccess (data) {
    console.log(data);
    $.ajax({
            type: "POST",
            url: "{{url('pagar/success')}}",
            data:{ payment_id: data.token,payment_type:data.payment_method,amount:amount*100 ,user_id:user_id},           
            dataType: "json",
            beforeSend: function() {
              $("#submit-button").attr('disabled','disabled');
              $("#loading-image").show();
            },
            success: function(data) {
                $("#loading-image").hide();

                if(data.message=='Payment Failed'){
                   window.location.href="{{url('/wallet/failure')}}";
                }else{
                   window.location.href="{{url('/wallet/success')}}";
                }             

            }
        });    

  }

  function handleError (data) {
    window.location.href="{{url('/wallet/failure')}}";
  }
  
  function handleClose () {
    console.log('The modal has been closed.')
  }

  

  var checkout = new PagarMeCheckout.Checkout({
    encryption_key:  "<?php echo env('PAGARME_ENCRYPTION_KEY'); ?>",
    success: handleSuccess,
    error: handleError,
    close: handleClose
  });

  checkout.open({
    amount: amount*100,
    buttonText: 'Pagar',
    buttonClass: 'botao-pagamento',
    customerData: 'true',
    createToken: 'true',
    paymentMethods: 'boleto,credit_card',
    items: [
      {
        id: '1',
        title: 'Wallet',
        unit_price: amount*100,
        quantity: 1,
        tangible: true
      },
      
    ]
  })
});
</script>
</script>