<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style media="screen">
    body{
      background-color: #023045;
    }
      .razorpay-payment-button{
        width: 50%;
        padding: 70px;
        margin-top: 10%;
        font-size: 50px;
        background-color: rgb(24, 224, 236);
        color: white;
        font-style: italic;
        font-weight: bolder;
        border: none;
      }
      .razorpay-payment-button:hover{
        background-color: rgb(0, 255, 133);
        transition: 5s;
      }
      @media screen and (max-width: 500px) {
        .razorpay-payment-button{
          width: 100%;
          padding: 70px;
          margin-top: 50%;
          font-size: 50px;
        }
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
<?php
include '../../config/config1.php';
require('../../config/config.php');
require('razorpay-php/Razorpay.php');
$money=mysqli_real_escape_string($con,$_POST['money']);
$o_ref = mysqli_real_escape_string($con,$_POST['o_id']);
$cname = mysqli_real_escape_string($con,$_POST['cname']);
$_SESSION["order_id"]=$o_ref;
$_SESSION["money"]=$money;
$Attname=$_SESSION["attname"];
// Create the Razorpay Order

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//
$orderData = [
    'receipt'         => $o_ref,
    'amount'          => $money * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;

$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => "KBiotics",
    "description"       => "A Software Devlopement Company",
    "image"             => "../logo.ico",
    "prefill"           => [
    "name"              => "$cname",
    "email"             => "customer@merchant.com",
    "contact"           => "9999999999",
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "$o_ref",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
    "order_id_customer"          => $o_ref,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);

require("checkout/{$checkout}.php");
