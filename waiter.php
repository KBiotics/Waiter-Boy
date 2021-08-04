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
   margin-top: 50px;
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
 }
 </style>
 </head>
 <body>

 <div class="header">
   <a href="waiter.php" class="logo">CompanyLogo WaiterBoy</a>
   <div class="header-right">
   </div>
 </div>
<div class="home">
  <table class="g_table">
    <tr>
      <td><button class="g_button" onclick="window.location.href='waiter.php';">
        <img src="https://www.pngall.com/wp-content/uploads/2016/04/Home-Download-PNG.png" style="height: 100px; width:100px;  "><br>Home</button></td>
      <td><button class="g_button" onclick="window.location.href='waiter_n_cstmr.php';"><img src="https://iconarchive.com/download/i6083/custom-icon-design/pretty-office-3/Add-Male-User.ico" style="height: 100px; width:100px;  "><br>New Customer</button></td>
    </tr>
    <tr>
      <td><button class="g_button" onclick="window.location.href='waiter_history.php';"><img src="https://icons.veryicon.com/png/o/miscellaneous/small-green-icon/history-36.png" style="height: 100px; width:100px;  "><br>Histroy</button></td>
      <td><button  class="g_button" onclick="window.location.href='waiter.php';">X</button></td>
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
