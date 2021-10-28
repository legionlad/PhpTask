<?php 
// Include configuration file  

require 'vendor/autoload.php';

define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51JpHDEEOOoMxlPBhq1XYo2xtLvEsI1EdVN1A2geQq9DwCZ3YzthwLt6673GZ6dKwvfr91BFveuCTquuIhCPitmlx00ObjJouad');
define('STRIPE_API_KEY', 'sk_test_51JpHDEEOOoMxlPBhFdkmXLLK0xUU1k0xXO6bz9c5noTBJhmRiENBpSYeYb3185ZrhDNSm2obKtUlseMQlRntn2se00sn6V6oKn'); 

 
\Stripe\Stripe::setApiKey(STRIPE_API_KEY);
     
        $charge =  \Stripe\Charge::create ([
                "amount" => $product['price'] * 100,
                "currency" => "usd",
                "source" => $stripeToken,
                "description" => "Dummy stripe payment." 
        ]);
            
        // $chargeJson = $charge->jsonSerialize(); 


        $transaction_final_message = '';

        if($charge['status'] === "succeeded"){
         $transaction_final_message = "<p style='color:green'>Transaction sucessful. Item has been purchased.</p>";

        }else{
         $transaction_final_message = "<p style='color:red;'>Transaction failed.</p>";

        }

        Flight::render('display_message.php', array('stripeToken' => $stripeToken, 'name' => $name,'product' => $product,'transaction_final_message' => $transaction_final_message));

?>