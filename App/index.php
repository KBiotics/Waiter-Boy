<?php
include '../config/config1.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/8b3aa3d333.js"></script>
<link rel="stylesheet" href="../meta/logo.css">
 <style>
 * {box-sizing: border-box;}

 body {
   margin: 0;
   font-family: Arial, Helvetica, sans-serif;
   background-color: #4b4b4c;
 }

 .header {
   overflow: hidden;
   background-color: #f1f1f1;
   padding: 20px 10px;
 }

 .header a {
   float: left;
   color: black;
   text-align: center;
   padding: 12px;
   text-decoration: none;
   font-size: 18px;
   line-height: 25px;
   border-radius: 4px;
 }

 .header a.logo {
   font-size: 25px;
   font-weight: bold;
 }

 .header a:hover {
   background-color: #ddd;
   color: black;
 }

 .header a.active {
   background-color: dodgerblue;
   color: white;
 }

 .header-right {
   float: right;
 }
 .container{
   padding: 0px 0px;
   margin-left: 0px;
 }
 table{
    table-layout:fixed;
 }
 td{
   width: 310px;
   height:500px;
 }
 .card{
   box-shadow: 5px 10px #888888;
 }
 .order{
   background: linear-gradient(to right bottom, #deca67, #fbdf32);
   color: white;
   font-weight: bolder;
 }
 .start{
   background-color: #00edff;
   border: none;
   color: white;
   font-size: 23px;
   font-weight: bold;
   margin-bottom: 10px;
 }
 .start:disabled{
   background-color: #c1c1c1;
   border: none;
   color: white;
   font-size: 23px;
   font-weight: bold;
   margin-bottom: 10px;
 }
 .complet{
   background-color: #38ff00;
   border: none;
   color: white;
   font-size: 23px;
   font-weight: bold;
 }
 .complet:disabled{
   background-color: #c1c1c1;
   border: none;
   color: white;
   font-size: 23px;
   font-weight: bold;
 }
 .card1{
   background-color: white;
   margin: auto;
   width: 600px;
   height: auto;
   padding: 15px 15px;
   margin-top: 5px;
   border-radius: 10px;
 }
 .card2{
   background-color: white;
   margin: auto;
   width: 600px;
   height: auto;
   padding: 15px 15px;
   margin-top: 5px;
   border-radius: 10px;
 }
 .Dlist{
   background-color: white;
   margin: auto;
   width: 600px;
   height: auto;
   padding: 15px 15px;
   margin-top: 5px;
   border-radius: 10px;
 }
 .search_bar{
   border-radius: 5px;
   font-size: 23px;
   margin: auto;
   width: 82%;
   padding: 10px 10px;
   border-color: rgb(80, 250, 84);
 }
 .search_btn{
   border: none;
   border-radius: 5px;
   font-size: 23px;
   padding: 10px 10px;
 }
 .status_pic{
   height: 15%;
   width: 70%;
 }
 .status_paid{
   height: 50%;
   width: 50%;
 }

 @media screen and (max-width: 500px) {
   .header a {
     float: none;
     display: table-cell;
     text-align: left;
   }

   .header-right {
     float: none;
   }
   .card1{
     background-color: white;
     margin: auto;
     width: auto;
     height: auto;
     padding: 15px 15px;
     margin-top: 5px;
     border-radius: 10px;
   }
   .card2{
     background-color: white;
     margin: auto;
     width: auto;
     height: auto;
     padding: 15px 15px;
     margin-top: 5px;
     border-radius: 10px;
   }
   .Dlist{
     background-color: white;
     margin: auto;
     width: auto;
     height: auto;
     padding: 15px 15px;
     margin-top: 5px;
     border-radius: 10px;
   }
   .search_bar{
     border-radius: 5px;
     font-size: 23px;
     margin: auto;
     width: 70%;
     padding: 10px 10px;
     border-color: rgb(80, 250, 84);
   }
   .search_btn{
     border: none;
     border-radius: 5px;
     font-size: 23px;
     padding: 10px 10px;
   }
 }
 </style>
 </head>
 <body>

 <div class="header">
   <a href="waiter_index.php" class="logo"><img src="../meta/logo.png" alt="logo" class="logo"></a>
   <div class="header-right">
     <a href="../lost.php">Exit<img src="../meta//exit.png" alt="" height"50" width="50"></a>
   </div>
 </div>
<div class="card1">
  <form class="" action="" method="post">
    <input type="number" class="search_bar" name="o_id" value="" placeholder="Search by Order ID." required>
    <input type="submit" class="search_btn" name="btn_next" value="Search">
  </form>
</div>
<?php
if(isset($_POST['btn_next'])){
  $oid = mysqli_real_escape_string($con,$_POST['o_id']);
$sql_query1 = "SELECT * FROM `cstmr` WHERE id='".$oid."' ";
$result = mysqli_query($con,$sql_query1);
 ?>
<div class="card2">
  <h5>Order Status :</h5>
  <?php
  while($row = mysqli_fetch_assoc($result))
    {
      $o_id=$row['id'];
      $cname=$row['name'];
      $ctno=$row['tno'];
      $address=$row['address'];
$mo=$row['mo'];
$d_guy=$row['d_guy'];
if ($ctno=="999") {
$ctno="<lable style=background:#ff007c;color:#ffffff;padding:2px;> (Online Order) </lable><br> Address: $address <br> Mo. <a href=tel:$mo>$mo</a>";
}
      $status_s=$row['pay_m'];
      $status=$row['status'];
      if ($status_s!="") {
        $status_s="Disabled";
      }
      else {
        $status_s="";
      }
      $statusimg='blank';

      if ($status=='Order in Progress') {
        $statusimg='../meta/in_progress.gif';
      }
      if ($status=='confirmed') {
        $statusimg='../meta/Status1.png';
      }
      if ($status=='Cooking') {
        $statusimg='../meta/Status2.png';
      }
      if ($status=='Served') {
        $statusimg='../meta/Status3.png';
      }
      if ($status=='Out for Delivery') {
        $statusimg='../meta/Out for Delivery.png';
      }
      if ($status=='Delivered') {
        $statusimg='../meta/Delivered.png';
      }
      if ($status=='') {
        $statusimg='../meta/Status0.png';
      }
   ?>
  <center><img src="<?php echo "$statusimg"; ?>" alt="" class="status_pic"></center>
  <?php if ($d_guy!="") {
    echo "<center><b>Will be Delivered Soon By : </b> $d_guy<br>";
    $sql_query_d_guy = "SELECT * FROM `delivary_guys` WHERE full_name='".$d_guy."'";
$result_d_guy = mysqli_query($con,$sql_query_d_guy);
while($row = mysqli_fetch_assoc($result_d_guy))
{
$d_guy_cno=$row['mo'];
}
?><i class="fa fa-phone-square" style=" color: rgb(52, 205, 71)" aria-hidden="true"></i> <?php echo "<a href=tel:$d_guy_cno>$d_guy_cno</a></center>";
  } ?>
</div>
 <div class="Dlist">

    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div style="overflow-x:auto;">
    <table table id="table" class="table table-bordered table-striped mb-0">
    <?php
        $sql_query15 = "SELECT * FROM `cstmr` WHERE id='".$o_id."'";
$result15 = mysqli_query($con,$sql_query15);
while($row = mysqli_fetch_assoc($result15))
  {
$D1=$row['D1'];
$D2=$row['D2'];
$D3=$row['D3'];
$D4=$row['D4'];
$D5=$row['D5'];
$D6=$row['D6'];
$D7=$row['D7'];
$D8=$row['D8'];
$D9=$row['D9'];
$D10=$row['D10'];
$D11=$row['D11'];
$D12=$row['D12'];
$qty1=$row['qty1'];
$qty2=$row['qty2'];
$qty3=$row['qty3'];
$qty4=$row['qty4'];
$qty5=$row['qty5'];
$qty6=$row['qty6'];
$qty7=$row['qty7'];
$qty8=$row['qty8'];
$qty9=$row['qty9'];
$qty10=$row['qty10'];
$qty11=$row['qty11'];
$qty12=$row['qty12'];
$status_l=$row['status'];
}
$D1P=0;
$D2P=0;
$D3P=0;
$D4P=0;
$D5P=0;
$D6P=0;
$D7P=0;
$D8P=0;
$D9P=0;
$D10P=0;
$D11P=0;
$D12P=0;

   $sql_query17 = "SELECT * FROM `menu` WHERE id='".$D1."'";
   $result17 = mysqli_query($con,$sql_query17);
   while($row = mysqli_fetch_assoc($result17))
     {
       $D1N=$row['Dname'];
       $D1P=$row['Dprice'];
     }
     $fprice1=$qty1*$D1P;
     if ($qty1==0) {
       $fD_name1="-";
     }
     else {
       $fD_name1="$qty1 $D1N $D1P x $qty1= $fprice1";
     }

     $sql_query2 = "SELECT * FROM `menu` WHERE id='".$D2."'";
     $result2 = mysqli_query($con,$sql_query2);
     while($row = mysqli_fetch_assoc($result2))
       {
         $D2N=$row['Dname'];
         $D2P=$row['Dprice'];
       }
       $fprice2=$qty2*$D2P;
       if ($qty2==0) {
         $fD_name2="-";
       }
       else {
         $fD_name2="$qty2 $D2N $D2P x $qty2= $fprice2";
       }

       $sql_query3 = "SELECT * FROM `menu` WHERE id='".$D3."'";
       $result3 = mysqli_query($con,$sql_query3);
       while($row = mysqli_fetch_assoc($result3))
         {
           $D3N=$row['Dname'];
           $D3P=$row['Dprice'];
         }
         $fprice3=$qty3*$D3P;
         if ($qty3==0) {
           $fD_name3="-";
         }
         else {
           $fD_name3="$qty3 $D3N $D3P x $qty3= $fprice3";
         }

         $sql_query4 = "SELECT * FROM `menu` WHERE id='".$D4."'";
         $result4 = mysqli_query($con,$sql_query4);
         while($row = mysqli_fetch_assoc($result4))
           {
             $D4N=$row['Dname'];
             $D4P=$row['Dprice'];
           }
           $fprice4=$qty4*$D4P;
           if ($qty4==0) {
             $fD_name4="-";
           }
           else {
             $fD_name4="$qty4 $D4N $D4P x $qty4= $fprice4";
           }

           $sql_query5 = "SELECT * FROM `menu` WHERE id='".$D5."'";
           $result5 = mysqli_query($con,$sql_query5);
           while($row = mysqli_fetch_assoc($result5))
             {
               $D5N=$row['Dname'];
               $D5P=$row['Dprice'];
             }
             $fprice5=$qty5*$D5P;
             if ($qty5==0) {
               $fD_name5="-";
             }
             else {
               $fD_name5="$qty5 $D5N $D5P x $qty5= $fprice5";
             }

             $sql_query6 = "SELECT * FROM `menu` WHERE id='".$D6."'";
             $result6 = mysqli_query($con,$sql_query6);
             while($row = mysqli_fetch_assoc($result6))
               {
                 $D6N=$row['Dname'];
                 $D6P=$row['Dprice'];
               }
               $fprice6=$qty6*$D6P;
               if ($qty6==0) {
                 $fD_name6="-";
               }
               else {
                 $fD_name6="$qty6 $D6N $D6P x $qty6= $fprice6";
               }

               $sql_query7 = "SELECT * FROM `menu` WHERE id='".$D7."'";
               $result7 = mysqli_query($con,$sql_query7);
               while($row = mysqli_fetch_assoc($result7))
                 {
                   $D7N=$row['Dname'];
                   $D7P=$row['Dprice'];
                 }
                 $fprice7=$qty7*$D7P;
                 if ($qty7==0) {
                   $fD_name7="-";
                 }
                 else {
                   $fD_name7="$qty7 $D7N $D7P x $qty7= $fprice7";
                 }

                 $sql_query8 = "SELECT * FROM `menu` WHERE id='".$D8."'";
                 $result8 = mysqli_query($con,$sql_query8);
                 while($row = mysqli_fetch_assoc($result8))
                   {
                     $D8N=$row['Dname'];
                     $D8P=$row['Dprice'];
                   }
                   $fprice8=$qty8*$D8P;
                   if ($qty8==0) {
                     $fD_name8="-";
                   }
                   else {
                     $fD_name8="$qty8 $D8N $D8P x $qty8= $fprice8";
                   }

                   $sql_query9 = "SELECT * FROM `menu` WHERE id='".$D9."'";
                   $result9 = mysqli_query($con,$sql_query9);
                   while($row = mysqli_fetch_assoc($result9))
                     {
                       $D9N=$row['Dname'];
                       $D9P=$row['Dprice'];
                     }
                     $fprice9=$qty9*$D9P;
                     if ($qty9==0) {
                       $fD_name9="-";
                     }
                     else {
                       $fD_name9="$qty9 $D9N $D9P x $qty9= $fprice9";
                     }

                     $sql_query10 = "SELECT * FROM `menu` WHERE id='".$D10."'";
                     $result10 = mysqli_query($con,$sql_query10);
                     while($row = mysqli_fetch_assoc($result10))
                       {
                         $D10N=$row['Dname'];
                         $D10P=$row['Dprice'];
                       }
                       $fprice10=$qty10*$D10P;
                       if ($qty10==0) {
                         $fD_name10="-";
                       }
                       else {
                         $fD_name10="$qty10 $D10N $D10P x $qty10= $fprice10";
                       }

                       $sql_query11 = "SELECT * FROM `menu` WHERE id='".$D11."'";
                       $result11 = mysqli_query($con,$sql_query11);
                       while($row = mysqli_fetch_assoc($result11))
                         {
                           $D11N=$row['Dname'];
                           $D11P=$row['Dprice'];
                         }
                         $fprice11=$qty11*$D11P;
                         if ($qty11==0) {
                           $fD_name11="-";
                         }
                         else {
                           $fD_name11="$qty11 $D11N $D11P x $qty11= $fprice11";
                         }

                         $sql_query12 = "SELECT * FROM `menu` WHERE id='".$D12."'";
                         $result12 = mysqli_query($con,$sql_query12);
                         while($row = mysqli_fetch_assoc($result12))
                           {
                             $D12N=$row['Dname'];
                             $D12P=$row['Dprice'];
                           }
                           $fprice12=$qty12*$D12P;
                           if ($qty12==0) {
                             $fD_name12="-";
                           }
                           else {
                             $fD_name12="$qty12 $D12N $D12P x $qty12= $fprice12";
                           }

                           $total_w_tax=$fprice1+$fprice2+$fprice3+$fprice4+$fprice5+$fprice6+$fprice7+$fprice8+$fprice9+$fprice10+$fprice11+$fprice12;
                           $total_tax=($total_w_tax*0.04);
                           $total=$total_tax+$total_w_tax;
        echo "<td class=card>";
        echo  "Order ID : ".$o_id."<br>";
            echo  $cname."<br>" ;
            echo  "Table No : ".$ctno."<br>" ;
            echo "<h3 class=order><center>Order</center></h3>";
            echo  "<h4><center>Status : ".$status_l."<br>On the way Towords You...</center></h4><br>" ;
            echo  "$fD_name1"."<br>" ;
            echo  "$fD_name2"."<br>" ;
            echo  "$fD_name3"."<br>" ;
            echo  "$fD_name4"."<br>" ;
            echo  "$fD_name5"."<br>" ;
            echo  "$fD_name6"."<br>" ;
            echo  "$fD_name7"."<br>" ;
            echo  "$fD_name8"."<br>" ;
            echo  "$fD_name9"."<br>" ;
            echo  "$fD_name10"."<br>" ;
            echo  "$fD_name11"."<br>" ;
            echo  "$fD_name12"."<br>" ;
            echo  "Total : $total_w_tax + ( Other Handling Charges : $total_tax ) = ??? $total"."<br>" ;

            echo "<center><form action=payment\pay.php method=post >";
            echo "<input type=hidden name=o_id value=$o_id>";
            echo "<input type=hidden name=cname value=$cname>";
            echo "<input type=hidden name=money value=$total>";
            if ($status_s=='Disabled') {
              echo "<img src=../meta/paid.png alt=Paid class=status_paid>";
            }
            else {
            echo "<input type=submit name=submit class=complet value='Pay Now with Razorpay' $status_s>";
            echo "</form></center>";
            echo "</td>";
            $_SESSION["attname"]="SELF $cname";
          }
      }}?>
    </table>
    </div>
  </div>
 </div>
 </body>
 </html>
