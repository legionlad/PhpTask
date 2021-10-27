<?php
require 'rb_core/rb-mysql.php';
require 'vendor/autoload.php';

R::setup( 'mysql:host=localhost;dbname=phptask','root', '' );
R::getDatabaseAdapter()->getDatabase()->stringifyFetches( FALSE );

R::getDatabaseAdapter()->getDatabase()->getPDO()->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);



Flight::route('/', function(){

    Flight::render('products.php');

  });

Flight::route('GET /product/@id',function($id){

    $product = R::getRow( "SELECT * FROM products WHERE product_id = '$id'");
    // print_r($product);

     Flight::render('product.php', array('product' => $product));
  });

  Flight::route('POST /checkout',function(){
    $id =   Flight::request()->data['product_id'];
    $product = R::getRow( "SELECT * FROM products WHERE product_id = '$id'");
    $stripeToken = Flight::request()->data['stripeToken'];
    $name = Flight::request()->data['name'];
    $email = Flight::request()->data['email'];
 
    Flight::render('payment.php', array('stripeToken' => $stripeToken, 'name' => $name, 'email' => $email,'product' => $product));


  });
  
  Flight::start();
  

?>