<?php

require '../vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_26PHem9AhJZvU623DfE1x4sd');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/manak/ecom/';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # TODO: replace this with the `price` of the product you want to sell
    'price' => '22',
    'quantity' => 1,
  ]],
  'payment_method_types' => [
    'card',
  ],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);