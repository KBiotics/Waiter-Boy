<?php
include '../config/config1.php';
$Attname=$_SESSION["attname"];
if ($Attname=='') {
  header("location:index.php");
}
$o_id="";
$o_id1=$Dname = mysqli_real_escape_string($con,$_POST['o_id']);
$o_id2=$_SESSION["order_id"];
if ($o_id1=="") {
  $o_id=$o_id2;
}
else {
  $o_id=$o_id1;
}

$_SESSION["order_id"]=$o_id;
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
 table{
   table-layout:fixed;
   width:100%;
 }
 * {
   word-wrap:break-word;
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
   <a href="waiter_index.php" class="logo"><img src="../meta/logo.png" alt="logo" class="logo"></a>
   <div class="header-right">
     <a class="active" href="waiter_order.php">Order <img src="../meta//bell.png" alt="" height"50" width="50"></a>
     <a href="waiter_pan.php">PAN<img src="../meta//pan.png" alt="" height"50" width="50"></a>
     <a href="waiter_n_cstmr.php">New Customer<img src="../meta//newc.ico" alt="" height"50" width="50"></a>
     <a href="waiter_history.php">History<img src="../meta//history.png" alt="" height"50" width="50"></a>
   </div>
   Order ID : <?php echo "$o_id"; ?>
 </div>
 <a href="manager.php" style=" background-color: rgb(255, 45, 45); padding: 10px; border-radius: 10px;" >Back to Managers Dashboard</a>

<input class="search" type="search" id="myInput" onkeyup="myFunction()" placeholder="Search for Verity of Aviable Dishes"/>
 <div class="Dlist">
   <?php
   $sql_query1 = "SELECT * FROM `menu` ";
$result = mysqli_query($con,$sql_query1);
    ?>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div style="overflow-x:auto;">
    <table table id="table" class="table table-bordered table-striped mb-0">
      <col style="width:10%">
      <col style="width:40%">
      <col style="width:15%">
      <col style="width:10%">
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
            echo "<td>" . $row['Dprice'] ."</td>";
            echo "<td>"."<button type=button class=btn btn-info btn-lg data-toggle=modal data-target=#myModal>+</button>"."</td>";
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
   <!-- Modal -->
   <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Qty.</h4>
         </div>
         <div class="modal-body">
           <center><center>
             <form method=post action="waiter_order_q2.php">
             <input type="hidden" name="id" id="id"><br>
             <input type="number" name="qty" value="" placeholder="Qty.">
             <input type=submit id=atp name=atp value="Add to Pan" class="atp">
             </form>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
       </div>
     </div>
   </div>

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
