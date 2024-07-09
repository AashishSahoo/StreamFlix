<?php
require_once("PayPal-PHP-SDK/autoload.php");
// require_once(__DIR__ . '/PayPal-PHP-SDK-1.14.0/autoload.php');

// require_once(__DIR__ . '/../PayPal-PHP-SDK-1.14.0/autoload.php');



// After Step 1
$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
      'AYWiRvhL0xOJqrwUjY7tI0sXbVLkY7sJ-9Kgd89yQEYz4XMVONrnI3q1zRKqrxnNj00gaHTDGwVO0xgT', // ClientID
      'ENN8buVcqv2O83jRIAsZIX6SKwCKcpjWg4YC7wFYfYl0hOTWcdTHQpK6loP6KFsBqlbnapZ3Hd5RZCjU'  //ClientSecret
  )
);


?>