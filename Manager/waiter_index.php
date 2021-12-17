<?php
include '../config/config1.php';
$Attname=$_SESSION["attname"];
if ($Attname=='') {
  header("location:index.php");
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
 .search{
 margin-left: 5px;
 margin-top: 10px;
 width: 97%;
 padding: 10px;
 }
 .home{
   height: 300px;
   width: 600px;
   background-color: #ddf2ec;
   margin: auto;
   margin-top: 5px;
   padding: 10px;
   border-radius: 30px;
 }
.g_button{
height: 100%;
width: 100%;
border-radius: 90px;
background-color: white;
}
.g_table{
  margin: auto;
}
.g_table td{
  height: 140px;
  width: 280px;
}
.box1{
  height: auto;
  width: 600px;
  background-color: #ffffff;
  margin: auto;
  margin-top: 50px;
  padding: 30px 10px;
  border-radius: 10px;
  color: rgb(105, 30, 247);
  font-style: italic;
  font-weight: bolder;
  font-size: 22px;
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
   .home{
     height: 300px;
     width: 90%;
     background-color: #ddf2ec;
     margin: auto;
   }
   .box1{
     width: auto;
     margin-bottom: 5px;
   }
 }
 </style>
 </head>
 <body>

 <div class="header">
   <a href="waiter_index.php" class="logo"><img src="../meta/logo.png" alt="logo" class="logo"></a>
   <div class="header-right">
   </div>
 </div>
 <a href="manager.php" style=" background-color: rgb(255, 45, 45); padding: 10px; border-radius: 10px;" >Back to Managers Dashboard</a>
 <div class="box1">
   Hi, <?php echo "$Attname"; ?>
 </div>
<div class="home">
  <table class="g_table">
    <tr>
      <td><button class="g_button" onclick="window.location.href='waiter_n_cstmr.php';"><img src="../meta//newc.ico" style="height: 100px; width:100px;  "><br>New Customer</button></td>
      <td><button class="g_button" onclick="window.location.href='waiter_history_home.php';"><img src="../meta//history.png" style="height: 100px; width:100px;  "><br>Histroy</button></td>
    </tr>
    <tr>
      <td><button class="g_button" onclick="window.location.href='waiter_index.php';"><img src="../meta//Payment QR.png" style="height: 100px; width:100px;"><br>Payment QR</button></td>
      <td><button  class="g_button" onclick="window.location.href='logout.php';"><img src="../meta//logout.ico" style="height: 100px; width:100px;  "><br>Logout</button></td>
    </tr>
  </table>
</div>
 </body>
 </html>

 <script>
 $(document).ready(function(){
   $("#myInput").on("keyup", function() {
     var value = $(this).val().toLowerCase();
     $("#myTable tr").filter(function() {
       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
     });
   });
 });
 </script>
 <script>

         var table = document.getElementById('table');

         for(var i = 1; i < table.rows.length; i++)
         {
             table.rows[i].onclick = function()
             {
                  //rIndex = this.rowIndex;
                  <!-- document.getElementById("fname").value = this.cells[0].innerHTML; -->
                  <!-- document.getElementById("mname").value = this.cells[1].innerHTML; -->
                  <!-- document.getElementById("lname").value = this.cells[2].innerHTML; -->
     document.getElementById("uid").value = this.cells[0].innerHTML;

             };
         }

  </script>
