<?php
include 'config1.php';
$o_id=$_SESSION["order_id"];
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
     <a class="active" href="waiter_order.php">Order</a>
     <a href="waiter_pan.php">PAN</a>
     <a href="waiter_n_cstmr.php">New Customer</a>
     <a href="Menu.php">Histroy</a>
   </div>
   <?php echo "$o_id"; ?>
 </div>

<input class="search" type="search" id="myInput" onkeyup="myFunction()" placeholder="Searching for Verity of Aviable Dishes"/>
 <div class="Dlist">
   <?php
   $sql_query1 = "SELECT * FROM `menu` ";
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
        <th> ₹ Price</th>
      <!-- <th>Last Name</th> -->
     </tr>
      <tbody id="myTable">
    <?php while($row = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Dname'] . "</td>";
            echo "<td>" . $row['Dprice'].".00" ."</td>";

            echo "</tr>";
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
                document.getElementById("name").value = this.cells[1].innerHTML;
                document.getElementById("price").value = this.cells[2].innerHTML;

              };
          }

   </script>

<form method=post action="">
<input type="hidden" name="id" id="id"><br>
<input type="number" name="qty" value="" placeholder="Qty.">
<input type=submit id=atp name=atp value="Add to Pan" class="atp">
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
     document.getElementById("id").value = this.cells[0].innerHTML;

             };
         }

  </script>

<?php
if(isset($_POST['atp'])){
  $D="D";
  $qty="qty";
  $sql_query1 = "SELECT * FROM `cstmr`WHERE id='".$o_id."'" ;
          $result = mysqli_query($con,$sql_query1);
      while($row = mysqli_fetch_assoc($result))
      {
       $D_temp=$row['D_temp'];
       $qty_temp=$row['qty_temp'];

       $D_temp=$D_temp+1;
       $qty_temp=$qty_temp+1;
       echo "$qty_temp";
      }
      $D="$D$D_temp";
      $qty="$qty$qty_temp";

 $Dname = mysqli_real_escape_string($con,$_POST['id']);
 $qtyo = mysqli_real_escape_string($con,$_POST['qty']);
 $sql_query_update = "UPDATE cstmr SET $D='".$Dname."' ,$qty='".$qtyo."' ,D_temp='".$D_temp."' ,qty_temp='".$qty_temp."' WHERE id='".$o_id."'";
 $result_update = mysqli_query($con,$sql_query_update);
   if($result_update==0)
   {
     echo "not updated";

   }
   else
   {
     //echo "sucessfully updated";
     ?><script>

              alert("sucessfully updated");
              </script>
       <?php
   }?>
   <div class="pan">
     <?php echo $D_temp ?>
   </div>
   <?php

   }
 ?>
