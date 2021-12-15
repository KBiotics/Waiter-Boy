<?php
include 'config1.php';
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
<link rel="stylesheet" href="meta/logo.css">
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
 .modify{
   border: none;
   background-color: #00ff1a;
   color: white;
   padding: 2px 7px;
 }
 .Dlist{
   background-color: white;
   border-radius: 10px;
   margin-top: 5px;
   padding-top: 10px;
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
 }
 </style>
 </head>
 <body>

 <div class="header">
   <a href="waiter_index.php" class="logo"><img src="meta/logo.png" alt="logo" class="logo"></a>
   <div class="header-right">
     <a  href="waiter_order.php">Order <img src="meta//bell.png" alt="" height"50" width="50"></a>
     <a href="waiter_pan.php">PAN<img src="meta//pan.png" alt="" height"50" width="50"></a>
     <a href="waiter_n_cstmr.php">New Customer<img src="meta//newc.ico" alt="" height"50" width="50"></a>
     <a class="active" href="waiter_history.php">History<img src="meta//history.png" alt="" height"50" width="50"></a>
   </div>
 </div>
 <a href="manager.php" style=" background-color: rgb(255, 45, 45); padding: 10px; border-radius: 10px;" >Back to Managers Dashboard</a>

<input class="search" type="search" id="myInput" onkeyup="myFunction()" placeholder="Search for Customer Name or ID"/>
 <div class="Dlist">
   <?php
   $sql_query1 = "SELECT * FROM `cstmr` ORDER BY(id) DESC ";
$result = mysqli_query($con,$sql_query1);
    ?>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div style="overflow-x:auto;">
    <table table id="table" class="table table-bordered table-striped mb-0">
      <col style="width:15%">
      <col style="width:60%">
      <col style="width:25%">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th> Status</th>
      <!-- <th>Last Name</th> -->
     </tr>
      <tbody id="myTable">
    <?php while($row = mysqli_fetch_assoc($result))
      {
        $id=$row['id'];
        echo "<tr>";
        echo "<td>" . $id . "</td>";
            echo "<td>" . $row['name'] ."</td>";
            echo "<td>" . $row['status'] ."</td>";
            echo "<td>";
            echo "<br><form action=waiter_order2.php method=post >";
            echo "<input type=hidden name=o_id value=$id>";
            echo "<input type=submit name=submit class=modify value=Modify>";
            echo "</form>";
             echo"</td>";
      }?>
    </table>
    </div>
  </div>
  <script>

          var table = document.getElementById('table');

          for(var i = 1; i < table.rows.length; i++)
          {
              table.rows[i].onclick = function()
              {
       document.getElementById("id").value = this.cells[0].innerHTML;

              };
          }

   </script>
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
