<?php
include 'config1.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="meta/logo.css">
 <style>
 body {
   margin: 5%;
 }

 .main {
   box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
   height: 700px;
   margin: 0 auto;
   max-width: 400px;
   overflow: hidden;
   position: relative;
   background-color: #606060;
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
   background-color: #F73D71;
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

 .Next:active {
   box-shadow: 0 0 12px 4px rgba(0, 0, 0, 0.3);
 }

 .Next.animate {
   opacity: 0;
   transform: translateY(-150px) scale(20);
   transition: width 250ms 200ms, transform 350ms 1350ms, opacity 350ms 1550ms;
   width: 56px;
 }

 </style>
 </head>
 <body>

 <div class="main">
   <center><img src="meta/logo.png" alt="" width="100px" height="100px"></center>
   <form class="" action="" method="post">
     <div class="inputs">
         <input class="input" type="text" name="fname" placeholder="First Name">
         <input class="input" type="text" name="lname" placeholder="Last Name">
         <select class="input" name="city">
           <option value="City1">City1</option>
         </select>
         <textarea name="address" class="input" rows="8" cols="80" placeholder="Address"></textarea>
         <input class="input" type="text" name="mo" value="" placeholder="Contact No." pattern="[0-9]{10}">
         <input type="submit" class="Next" name="next" value="Next">
     </div>

   </form>

    </div>
 </body>
 </html>


 <?php
 if(isset($_POST['next'])){
 $fname = mysqli_real_escape_string($con,$_POST['fname']);
 $lname = mysqli_real_escape_string($con,$_POST['lname']);
 $address = mysqli_real_escape_string($con,$_POST['address']);
 $city = mysqli_real_escape_string($con,$_POST['city']);
 $full_address = "$address $city";
 $mo = mysqli_real_escape_string($con,$_POST['mo']);
 $name = "$fname $lname";
 $tno = "999";
 $sql_query_insert = "INSERT INTO cstmr(name, tno, address, mo) values ('$name',' $tno',' $full_address',' $mo')";
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
