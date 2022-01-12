<?php
include '../config/config1.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../meta/logo.css">
<script src="https://use.fontawesome.com/8b3aa3d333.js"></script>
 <style>
 body {
   margin: 5%;
   background-color: #000a30;
 }

 .main {
   box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
   height: auto;
   margin: 0 auto;
   padding: 15px;
   max-width: 400px;
   overflow: hidden;
   position: relative;
   background-color: rgba(255, 112, 164, 0.23);
 }

 .inputs {
   position: relative;
   margin: 0 50px;
 }

 .input {
   background: transparent;
   border: 0;
   border-bottom: 1px solid white;
   box-sizing: border-box;
   color: white;
   display: block;
   font-size: 16px;
   margin-bottom: 30px;
   outline: none !important;
   opacity: .6;
   padding-bottom: 15px;
   width: 100%;
 }

 .Next-container {
   height: 100%;
   left: 0;
   margin: 0 auto;
   overflow: hidden;
   position: absolute;
   top: 0;
   width: 100%;
 }

 .Next {
   background-color: #f90046;
   color: rgb(255, 255, 255);
   font-weight: bold;
   border: 0;
   border-radius: 28px;
   display: block;
   font-size: 16px;
   height: 56px;
   margin: 0 auto;
   max-width: 300px;
   outline: none !important;
   overflow: hidden;
   top: 560px;
   transition: box-shadow 150ms;
   width: 100%;
 }
 .Next:hover{
   background-color: rgb(0, 255, 134)
 }

 .Next:active {
   box-shadow: 0 0 12px 4px rgba(0, 0, 0, 0.3);
 }

 .Next.animate {
   opacity: 0;
   transform: translateY(-150px) scale(20);
   transition: width 250ms 200ms, transform 350ms 1350ms, opacity 350ms 1550ms;
   width: 56px;
 }
 .lcard{
   width: 50%;
   background-color: rgba(0, 255, 45, 0.15);
   margin: auto;
   margin-top: 5%;
   padding: 25px;
 }
 .link_404{
   color: #fff !important;
   padding: 10px 12px;
   font-size: 25px;
   margin: 20px 0;
   display: inline-block;

 }

 </style>
 </head>
 <body>

 <div class="main">
   <center><img src="../meta/waiter.png" alt="" width="100px" height="100px"><img src="../meta/logo.png" alt="" width="250px" height="100px"> <br> <label for="" style=" color: rgb(255, 255, 255); font-size: 30px; font-family: fantasy; ">Dine - In</label></center><hr><br><br>
   <form class="" action="" method="post">
     <div class="inputs">
         <input class="input" type="text" name="fname" placeholder="First Name" required>
         <input class="input" type="text" name="lname" placeholder="Last Name" required>
         <input class="input" type="text" name="tno" value="" placeholder="Table No" pattern="[0-9]{}" title="Invalid Table Number." required>
         <input class="input" type="text" name="mo" value="" placeholder="Contact No." pattern="[0-9]{10}" title="Invalid Mobile Number." required>
         <input type="submit" class="Next" name="next" value="Next">
     </div>

   </form>

    </div>
    <div class="lcard">
      <center><a href="../Order_Online_Dine_In" class="link_404"> <i class="fa fa-cutlery" aria-hidden="true" style=" font-size: 50px; color: #ff0048"></i><br> New Order</a>
      <a href="../App" class="link_404"><i class="fa fa-truck" aria-hidden="true" style=" font-size: 50px; color: #7500ff"></i><br>Track Order</a></center>
    </div>
 </body>
 </html>


 <?php
 if(isset($_POST['next'])){
 $fname = mysqli_real_escape_string($con,$_POST['fname']);
 $lname = mysqli_real_escape_string($con,$_POST['lname']);
 $mo = mysqli_real_escape_string($con,$_POST['mo']);
 $name = "$fname $lname";
 $tno = mysqli_real_escape_string($con,$_POST['tno']);
 $sql_query_insert = "INSERT INTO cstmr(name, tno, mo) values ('$name',' $tno',' $mo')";
 $result_insert = mysqli_query($con,$sql_query_insert);
  if($result_insert==0)
  {
    ?><script>

             alert("Something Wrong !");
             </script>
      <?php

  }
  else
  {
    $sql_query1 = "SELECT id FROM `cstmr`";
            $result = mysqli_query($con,$sql_query1);
    		while($row = mysqli_fetch_assoc($result))
    		{
    		 $id=$row['id'];
         echo "$id";
    		}
    $_SESSION["order_id"]=$id;
    ?><script>

             alert("Token Genrated Sucessfully \n Order ID : <?php echo "$id"; ?>");
             </script>

             <script>
           window.location.href = "waiter_order.php";
            </script>
      <?php
  }

  }
  ?>
