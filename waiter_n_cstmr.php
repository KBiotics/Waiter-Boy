<?php
include 'config1.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <style>
 * {box-sizing: border-box;}

 body {
   margin: 0;
   font-family: Arial, Helvetica, sans-serif;
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

 @media screen and (max-width: 500px) {
   .header a {
     float: none;
     display: block;
     text-align: left;
   }

   .header-right {
     float: none;
   }
 }
 </style>
 </head>
 <body>

 <div class="header">
   <a href="#default" class="logo">CompanyLogo Owner</a>
   <div class="header-right">
     <a class="active" href="manager.php">Home</a>
     <a href="manager_Menu.php">Menu</a>
     <a href="manager_waiters.php">Waiters</a>
   </div>
 </div>

 <div class="details">
   <form class="" action="" method="post">
     <h3>Customer Details</h3>
     <input type="text" name="name" value="Customer Name"> <br>
     <input type="text" name="tno" value="Table No.">
     <input type="submit" name="next" value="Next">
   </form>
 </div>

 </body>
 </html>

 <?php
 if(isset($_POST['next'])){
 $name = mysqli_real_escape_string($con,$_POST['name']);
 $tno = mysqli_real_escape_string($con,$_POST['tno']);
 $sql_query_insert = "INSERT INTO cstmr(name, tno) values ('$name',' $tno')";
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
