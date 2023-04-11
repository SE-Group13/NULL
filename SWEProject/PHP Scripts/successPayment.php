<?php
require '../vendor/autoload.php';

// replace token and secret below with the yours one get from https://developer.paypal.com/dashboard/accounts
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'token',
        'secret'
    )
);

$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];

// Execute the payment with the payment ID and payer ID
$payment = \PayPal\Api\Payment::get($paymentId, $apiContext);
$execution = new \PayPal\Api\PaymentExecution();
$execution->setPayerId($payerId);
try {
    $payment->execute($execution, $apiContext);
    // The payment has been executed successfully, redirect to postJob.php to upload job data into database
    header( "refresh:5;url=postJob.php" );
    echo 'Payment successful! Thank you for your purchase, redirecting after 5 seconds.';
} catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // Handle PayPal API errors
    die('Error executing payment: ' . $ex->getMessage());
}
?>