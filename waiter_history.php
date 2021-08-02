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
     <a class="active" href="#home">Home</a>
     <a href="waiter_n_cstmr.php">New Customer</a>
     <a href="Menu.php">Histroy</a>
   </div>
 </div>

<input class="search" type="search" id="myInput" onkeyup="myFunction()" placeholder="Searching for Verity of Aviable Dishes"/>
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
            echo "<input type=submit name=submit value=Modify>";
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

<form method=post action="">
  <!-- First Name:<input type="text" name="fname" id="fname"><br><br> -->
  <!-- Middle Name:<input type="text" name="lname" id="mname"><br><br> -->
  <!-- Last Name:<input type="text" name="age" id="lname"><br><br> -->
<input type="hidden" name="id" id="id"><br>
<input type=submit id=submit name=submit value="view more" class="viewmore">

</form>
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
