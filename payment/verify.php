<?php
include '../config1.php';
require('config.php');
$o_id=$_SESSION["order_id"];

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
             ?><script>

                      alert("Your payment was successful");
                      </script>
               <?php
               $total=$_SESSION["money"];
             $pay_m="Razorpay";
             $pay_l=$_POST['razorpay_payment_id'];
             $o_ref = $o_id;
             $dateIII = date("Y-m-d h:i:sa");
             echo "$pay_m";
             $sql_query_update = "UPDATE cstmr SET pay_m='".$pay_m."' ,pay_l='".$pay_l."' ,dateIII='".$dateIII."' ,total='".$total."' WHERE id='".$o_ref."'";
             $result_update = mysqli_query($con,$sql_query_update);
               if($result_update==0)
               {
                 ?><script>

                          alert("Something went Wrong");
                          </script>
                   <?php
                   ?>    <script>
                        window.location.href = "../manager.php";
                         </script>
                     <?php
               }
               else
               {
                 //echo "sucessfully updated";
                 ?>    <script>
                      window.location.href = "../manager.php";
                       </script>
                   <?php
               }
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
