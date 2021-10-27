<?php
require 'rb_core/rb-mysql.php';
require 'vendor/autoload.php';



Flight::route('/', function(){

    Flight::render('hello.php', array('name' => 'Bob'));

  });

  
  Flight::start();
  

?>