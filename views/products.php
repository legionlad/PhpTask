<?php


$products = R::getAll( 'SELECT * FROM products' );

 
 
Flight::render('index.php', array('products' => $products));



?>