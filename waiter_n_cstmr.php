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
<script src="https://use.fontawesome.com/c75d7f5569.js"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
 .details{
   margin: auto;
   height: 300px;
   width: 300px;
   background-color: #01f9c6;
   box-shadow: 5px 10px #888888;
   padding-top: 10px;
 }
 input{
   font-size: 23px;
   margin: 10px;
   border: none;
   float:none;
 }
 .next{
   width: 120px;
   height: 50px;
   font-weight: bolder;
   
 }

 @media screen and (max-width: 500px) {
   .header a {

   }

   .header-right {
   }
 }
 </style>
 </head>
 <body>

 <div class="header">
   <a href="#default" class="logo">CompanyLogo Waiter</a>
   <div class="header-right">
     <a class="active" href="manager.php"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
   </div>
 </div>

 <div class="details">
   <form class="" action="" method="post">
     <center><h3><b>Customer Details</b></h3>
     <input type="text" name="name" value="" placeholder="Customer Name"> <br>
     <input type="text" name="tno" value="" placeholder="Table No.">
     <input type="submit" name="next" class="next" value="Next"></center>
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
