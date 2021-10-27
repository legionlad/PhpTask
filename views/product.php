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
                <div class="view view-cascade overlay text-center"> <img class="card-img-top" src="../<?=$product['image_path']?>" alt=""> <a>
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
        
        <!-- Product Info -->
        <p><b>Item Name:</b> <?php echo $itemName; ?></p>
        <p><b>Price:</b> <?php echo '$'.$itemPrice.' '.$currency; ?></p>
    </div>
    <div class="panel-body">
        <!-- Display errors returned by createToken -->
        <div id="paymentResponse"></div>
        
        <!-- Payment form -->
        <form action="/" method="POST" id="paymentFrm">
            <div class="form-group">
                <label>NAME</label>

                <input type="text" name="name" id="name" class="field" placeholder="Enter name" required="" autofocus="">
            </div>
            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" name="email" id="email" class="field" placeholder="Enter email" required="">
            </div>
            <div class="form-group">
                <label>CARD NUMBER</label>
                <div id="card_number" class="field"></div>
            </div>
            <div class="row">
                <div class="left">
                    <div class="form-group">
                        <label>EXPIRY DATE</label>
                        <div id="card_expiry" class="field" ></div>
                    </div>
                </div>
                <div class="right">
                    <div class="form-group">
                        <label>CVC CODE</label>
                        <div id="card_cvc" class="field"></div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success" id="payBtn">Submit Payment</button>
        </form>
    </div>
</div>


      </div>

      <script>
// Create an instance of the Stripe object
// Set your publishable API key
var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

// Create an instance of elements
var elements = stripe.elements();

var style = {
    base: {
        fontWeight: 400,
        fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
        fontSize: '16px',
        lineHeight: '1.4',
        color: '#555',
        backgroundColor: '#fff',
        '::placeholder': {
            color: '#888',
        },
    },
    invalid: {
        color: '#eb1c26',
    }
};

var cardElement = elements.create('cardNumber', {
    style: style
});
cardElement.mount('#card_number');

var exp = elements.create('cardExpiry', {
    'style': style
});
exp.mount('#card_expiry');

var cvc = elements.create('cardCvc', {
    'style': style
});
cvc.mount('#card_cvc');

// Validate input of the card elements
var resultContainer = document.getElementById('paymentResponse');
cardElement.addEventListener('change', function(event) {
    if (event.error) {
        resultContainer.innerHTML = '<p>'+event.error.message+'</p>';
    } else {
        resultContainer.innerHTML = '';
    }
});

// Get payment form element
var form = document.getElementById('paymentFrm');

// Create a token when the form is submitted.
form.addEventListener('submit', function(e) {
    e.preventDefault();
    createToken();
});

// Create single-use token to charge the user
function createToken() {
    stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error
            resultContainer.innerHTML = '<p>'+result.error.message+'</p>';
        } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
        }
    });
}

// Callback to handle the response from stripe
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
	
    // Submit the form
    form.submit();
}
</script>
     
    </div>
  </div>



</body>
</html>