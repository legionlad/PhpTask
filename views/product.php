<?php 
include_once 'stripe_config.php';?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Store One page Bootstrap theme</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .bg {
    width: 100%;
    height: auto;
    min-height: 100vh;
    background-color: #cccccc;
    background-size: 100% 100%;
    background-position: top center;
    margin: auto
}

.mainRow {
    margin-left: 10%;
    margin-right: 10%
}

p {
    margin: 0px
}

.desc {
    background-color: #f0edeb;
    margin-top: 5%;
    margin-left: 0;
    margin-right: 50px;
    margin-bottom: 4%
}

.card-body {
    padding: 0;
    margin: 0;
    margin-top: 10%
}

div.card.main {
    margin: 0px !important
}

.card {
    padding: 0 !important;
    margin-top: 40px
}

.quantity,
.shipping,
.promocode,
.subtotal,
.cardAndExpire,
.nameAndcvc {
    margin: 5%;
    color: #6c757d !important
}

.heading1 {
    margin: 5%;
    font-size: 25px
}

.heading2 {
    margin: 5%;
    margin-top: 15%;
    font-size: 20px
}

.payment {
    background-color: #f0edeb;
    padding: 3px;
    margin-top: 15%
}

.text1 {
    color: black;
    font-weight: 700
}

.card-footer {
    background-color: black;
    color: white
}

.purchaseLink {
    text-decoration: none
}

.row1 {
    font-size: 12px
}

.row2 {
    font-weight: 600
}

.subRow {
    margin-left: 10%;
    margin-bottom: 2%;
    margin-top: 5%
}

p.cardAndExpireValue,
p.nameAndcvcValue {
    margin: 5%;
    margin-bottom: 10%;
    font-weight: 600
}

p.nameAndcvc,
p.cardAndExpire {
    margin-bottom: -10px
}

.total {
    margin: 5%
}

.totalText {
    font-weight: 700
}

.totalText2 {
    font-weight: 700;
    font-size: 30px
}

.card-img-top {
    width: 100%;
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px);
    height: 430px
}
    </style>
<body>
<!--For Page-->
<div class="bg">
    <!--For Row containing all card-->
    <div class="row mainRow">
        <!--Card 1-->
        <div class="col-sm-8">
        
            <div class="card card-cascade wider shadow p-3 mb-5 ">
                <!--Card image-->
                <div class="view view-cascade overlay text-center"> 
                    <img class="card-img-top" src="../<?=$product['image_path']?>" alt=""> <a>
                        <div class="mask rgba-white-slight"></div>
                    </a> </div>
                <!--Product Description-->
                <div class="desc" style="padding:10px;">
                <span class="text-muted">  <?= 
                      $product['description']
                      ?>
                </div>
            </div>
        </div>
        <!--Card 2-->
        <div class="col-sm-4">
            <div class="card card-cascade card-ecommerce wider shadow p-3 mb-5 ">
                <!--Card Body-->
                <div class="card-body card-body-cascade">
                    <!--Card Description-->
                    <div class="card2decs">
                        <p class="heading1"><strong><?=$product['title']?></strong></p> 
                        <p class="shipping">Shipping<span class="float-right text1">Free</span></p>
                         <p class="total"><strong>Total</strong><span class="float-right totalText1">$<span class="totalText2"><?=$product['price']?></span></span></p>
                    </div>
                    <div class="payment">
                        <p class="heading2"><strong>Payment Details</strong></p>
                        <p class="cardAndExpire">Card Number<span class="float-right">Expiry</span></p>
                        <p class="cardAndExpireValue">4242424242424242<span class="float-right">26/11</span></p>
                        <p class="nameAndcvc" style="margin-bottom:-10px;">Cardholder name<span class="float-right">CVC</span></p>
                        <p class="nameAndcvcValue">Mr. Example<span class="float-right">010</span></p>
                    </div>
                    <!--Card footer--> 
                        <div class="card-footer text-center"> 
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Pay Now
   </button> </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
 

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      

      <!-- Modal body -->
      <div class="modal-body">
      
      <div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Charge <?php echo '$'.$itemPrice; ?> with Stripe</h3>
        <form role="form" action="/manak/ecom/payment" method="post"
							class="form-validation" data-cc-on-file="false"
							data-stripe-publishable-key="<?=STRIPE_PUBLISHABLE_KEY?>"
							id="payment-form">

							<div class='form-row row'>
								<div class='col-xs-12 form-group required'>
									<label class='control-label'>Name on Card</label>
									<input class='form-control' name="name" size='4' type='text'>
                                    <input type="hidden" name="product_id" value="<?=$product['product_id']?>">
								</div>
							</div>

							<div class='form-row row'>
								<div class='col-xs-12 form-group card required'>
									<label class='control-label'>Card Number</label>
									<input autocomplete='off' class='form-control card-number' value="4242424242424242" size='20' type='text'>
								</div>
							</div>
        
							<div class='form-row row'>
								<div class='col-xs-12 col-md-4 form-group cvc required'>
									<label class='control-label'>CVC</label>
									<input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311'
										size='4' value="311" type='text'>
								</div>
								<div class='col-xs-12 col-md-4 form-group expiration required'>
									<label class='control-label'>Expiration Month</label>
									<input class='form-control card-expiry-month' placeholder='MM' value="11" size='2' type='text'>
								</div>
								<div class='col-xs-12 col-md-4 form-group expiration required'>
									<label class='control-label'>Expiration Year</label>
									<input class='form-control card-expiry-year' placeholder='YYYY' value="26" size='4'
										type='text'>
								</div>
							</div>

							<div class='form-row row'>
								<div class='col-md-12 error form-group hide'>
									<div class='alert-danger alert'>Error occured while making the payment.</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<button class="btn btn-danger btn-lg btn-block" type="submit">Pay <?=$product['price']?></button>
								</div>
							</div>

						</form>


        

		</div>
	</div>
</div>



 

 
    </div>
</div>
      </div>


       
    </div>
  </div>

  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <script type="text/javascript">
	$(function () {
		var $stripeForm = $(".form-validation");
		$('form.form-validation').bind('submit', function (e) {
			var $stripeForm = $(".form-validation"),
				inputSelector = ['input[type=email]', 'input[type=password]',
					'input[type=text]', 'input[type=file]',
					'textarea'
				].join(', '),
				$inputs = $stripeForm.find('.required').find(inputSelector),
				$errorMessage = $stripeForm.find('div.error'),
				valid = true;
			$errorMessage.addClass('hide');

			$('.has-error').removeClass('has-error');
			$inputs.each(function (i, el) {
				var $input = $(el);
				if ($input.val() === '') {
					$input.parent().addClass('has-error');
					$errorMessage.removeClass('hide');
					e.preventDefault();
				}
			});

			if (!$stripeForm.data('cc-on-file')) {
				e.preventDefault();
				Stripe.setPublishableKey($stripeForm.data('stripe-publishable-key'));
				Stripe.createToken({
					number: $('.card-number').val(),
					cvc: $('.card-cvc').val(),
					exp_month: $('.card-expiry-month').val(),
					exp_year: $('.card-expiry-year').val()
				}, stripeResponseHandler);
			}

		});

		function stripeResponseHandler(status, res) {
			if (res.error) {
				$('.error')
					.removeClass('hide')
					.find('.alert')
					.text(res.error.message);
			} else {
				var token = res['id'];
				$stripeForm.find('input[type=text]').empty();
				$stripeForm.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
				$stripeForm.get(0).submit();
			}
		}

	});
</script>

</body>
</html>