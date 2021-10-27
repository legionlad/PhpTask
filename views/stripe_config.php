<?php

 // Product Details 
// Minimum amount is $0.50 US 

$itemName = $product['title']; 
$itemNumber = $product['product_id']; 
$itemPrice = $product['price']; 
$currency = "USD"; 
 
// Stripe API configuration  
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51JpHDEEOOoMxlPBhq1XYo2xtLvEsI1EdVN1A2geQq9DwCZ3YzthwLt6673GZ6dKwvfr91BFveuCTquuIhCPitmlx00ObjJouad');
define('STRIPE_API_KEY', 'sk_test_51JpHDEEOOoMxlPBhFdkmXLLK0xUU1k0xXO6bz9c5noTBJhmRiENBpSYeYb3185ZrhDNSm2obKtUlseMQlRntn2se00sn6V6oKn'); 

?>