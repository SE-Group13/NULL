<?php
require '../vendor/autoload.php';

// Set up the API context with your PayPal credentials
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'token',
        'secret'
    )
);

// Fetch the payment ID and payer ID from the GET parameters
$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];

// Execute the payment with the payment ID and payer ID
$payment = \PayPal\Api\Payment::get($paymentId, $apiContext);
$execution = new \PayPal\Api\PaymentExecution();
$execution->setPayerId($payerId);
try {
    $payment->execute($execution, $apiContext);
    // The payment has been executed successfully
    // Insert your code here to update your database or send a confirmation email
    echo 'Payment successful! Thank you for your purchase.';
} catch (\PayPal\Exception\PayPalConnectionException $ex) {
    // Handle any PayPal API errors
    die('Error executing payment: ' . $ex->getMessage());
}
?>