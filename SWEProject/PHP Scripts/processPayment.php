<?php
// dependencies
require '../vendor/autoload.php';

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

// replace token and secret below with the yours one get from https://developer.paypal.com/dashboard/accounts
$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'token',
        'secret'
    )
);

// setting mode to sandbox
$apiContext->setConfig([
    'mode' => 'sandbox'
]);

// setting objects or variables for payment processing

$payer = new Payer();
$payer->setPaymentMethod("paypal");

$amount = new Amount();
$amount->setCurrency('GBP')
->setTotal($_POST['price']);

$item = new Item();
$item->setName($_POST['jobName'])
->setCurrency('GBP')
->setQuantity(1)
->setPrice($_POST['price']);

$itemList = new ItemList();
$itemList->setItems([$item]);

$details = new Details();
$details->setTax(0)
->setSubtotal($_POST['price']);

$transaction = new Transaction();
$transaction->setAmount($amount)
->setItemList($itemList)
->setDescription($_POST['description']);

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl("http://localhost/SWEProject/PHP%20Scripts/successPayment.php") // url for executing payment
->setCancelUrl("http://localhost/SWEProject/AddJob.php"); // if cancel payment, go to addjob page

$payment = new Payment();
$payment->setIntent('sale')
->setPayer($payer)
->setRedirectUrls($redirectUrls)
->setTransactions([$transaction]);

try {
$payment->create($apiContext);
$approvalUrl = $payment->getApprovalLink();
header("Location: {$approvalUrl}"); // redirect to paypal website
} catch (Exception $e) {
die($e->getMessage());
}
?>