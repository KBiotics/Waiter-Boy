<?php
include 'config1.php';
$o_id=$_SESSION["order_id"];
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
 .confirm{
   margin: auto;
   width: 70%;
   height:50px;
   color: white;
   font-weight: bold;
   font-size: 23px;
   background-color: #00ffa7;
   border: none;
 }
 .tr_head{
   color: white;
 }
 .tr_total{
   color: white;
   font-weight: bold;
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
     <a class="active" href="waiter_pan.php">PAN<img src="meta//pan.png" alt="" height"50" width="50"></a>
     <a href="waiter_n_cstmr.php">New Customer<img src="meta//newc.ico" alt="" height"50" width="50"></a>
     <a href="waiter_history.php">History<img src="meta//history.png" alt="" height"50" width="50"></a>
   </div>
   Order ID : <?php echo "$o_id"; ?>
 </div>
 <a href="manager.php" style=" background-color: rgb(255, 45, 45); padding: 10px; border-radius: 10px;" >Back to Managers Dashboard</a>

<input class="search" type="search" id="myInput" onkeyup="myFunction()" placeholder="Search for Ordered Dishes"/>
 <div class="Dlist">
   <?php
   $sql_query1 = "SELECT * FROM `cstmr` WHERE id='".$o_id."'";
   $result = mysqli_query($con,$sql_query1);
   while($row = mysqli_fetch_assoc($result))
     {
   $D1=$row['D1'];
   $D2=$row['D2'];
   $D3=$row['D3'];
   $D4=$row['D4'];
   $D5=$row['D5'];
   $D6=$row['D6'];
   $D7=$row['D7'];
   $D8=$row['D8'];
   $D9=$row['D9'];
   $D10=$row['D10'];
   $D11=$row['D11'];
   $D12=$row['D12'];
   $qty1=$row['qty1'];
   $qty2=$row['qty2'];
   $qty3=$row['qty3'];
   $qty4=$row['qty4'];
   $qty5=$row['qty5'];
   $qty6=$row['qty6'];
   $qty7=$row['qty7'];
   $qty8=$row['qty8'];
   $qty9=$row['qty9'];
   $qty10=$row['qty10'];
   $qty11=$row['qty11'];
   $qty12=$row['qty12'];
   }

   $sql_query1 = "SELECT * FROM `menu` WHERE id='".$D1."'";
   $result = mysqli_query($con,$sql_query1);
   while($row = mysqli_fetch_assoc($result))
     {
       $D1N=$row['Dname'];
       $D1P=$row['Dprice'];
     }
     $fprice1=$qty1*$D1P;
     $sql_query2 = "SELECT * FROM `menu` WHERE id='".$D2."'";
     $result2 = mysqli_query($con,$sql_query2);
     while($row = mysqli_fetch_assoc($result2))
       {
         $D2N=$row['Dname'];
         $D2P=$row['Dprice'];
       }
       $fprice2=$qty2*$D2P;

       $sql_query3 = "SELECT * FROM `menu` WHERE id='".$D3."'";
       $result3 = mysqli_query($con,$sql_query3);
       while($row = mysqli_fetch_assoc($result3))
         {
           $D3N=$row['Dname'];
           $D3P=$row['Dprice'];
         }
         $fprice3=$qty3*$D3P;

         $sql_query4 = "SELECT * FROM `menu` WHERE id='".$D4."'";
         $result4 = mysqli_query($con,$sql_query4);
         while($row = mysqli_fetch_assoc($result4))
           {
             $D4N=$row['Dname'];
             $D4P=$row['Dprice'];
           }
           $fprice4=$qty4*$D4P;

           $sql_query5 = "SELECT * FROM `menu` WHERE id='".$D5."'";
           $result5 = mysqli_query($con,$sql_query5);
           while($row = mysqli_fetch_assoc($result5))
             {
               $D5N=$row['Dname'];
               $D5P=$row['Dprice'];
             }
             $fprice5=$qty5*$D5P;

             $sql_query6 = "SELECT * FROM `menu` WHERE id='".$D6."'";
             $result6 = mysqli_query($con,$sql_query6);
             while($row = mysqli_fetch_assoc($result6))
               {
                 $D6N=$row['Dname'];
                 $D6P=$row['Dprice'];
               }
               $fprice6=$qty6*$D6P;

               $sql_query7 = "SELECT * FROM `menu` WHERE id='".$D7."'";
               $result7 = mysqli_query($con,$sql_query7);
               while($row = mysqli_fetch_assoc($result7))
                 {
                   $D7N=$row['Dname'];
                   $D7P=$row['Dprice'];
                 }
                 $fprice7=$qty7*$D7P;

                 $sql_query8 = "SELECT * FROM `menu` WHERE id='".$D8."'";
                 $result8 = mysqli_query($con,$sql_query8);
                 while($row = mysqli_fetch_assoc($result8))
                   {
                     $D8N=$row['Dname'];
                     $D8P=$row['Dprice'];
                   }
                   $fprice8=$qty8*$D8P;

                   $sql_query9 = "SELECT * FROM `menu` WHERE id='".$D9."'";
                   $result9 = mysqli_query($con,$sql_query9);
                   while($row = mysqli_fetch_assoc($result9))
                     {
                       $D9N=$row['Dname'];
                       $D9P=$row['Dprice'];
                     }
                     $fprice9=$qty9*$D9P;

                     $sql_query10 = "SELECT * FROM `menu` WHERE id='".$D10."'";
                     $result10 = mysqli_query($con,$sql_query10);
                     while($row = mysqli_fetch_assoc($result10))
                       {
                         $D10N=$row['Dname'];
                         $D10P=$row['Dprice'];
                       }
                       $fprice10=$qty10*$D10P;

                       $sql_query11 = "SELECT * FROM `menu` WHERE id='".$D11."'";
                       $result11 = mysqli_query($con,$sql_query11);
                       while($row = mysqli_fetch_assoc($result11))
                         {
                           $D11N=$row['Dname'];
                           $D11P=$row['Dprice'];
                         }
                         $fprice11=$qty11*$D11P;

                         $sql_query12 = "SELECT * FROM `menu` WHERE id='".$D12."'";
                         $result12 = mysqli_query($con,$sql_query12);
                         while($row = mysqli_fetch_assoc($result12))
                           {
                             $D12N=$row['Dname'];
                             $D12P=$row['Dprice'];
                           }
                           $fprice12=$qty12*$D12P;

                           $total=$fprice1+$fprice2+$fprice3+$fprice4+$fprice5+$fprice6+$fprice7+$fprice8+$fprice9+$fprice10+$fprice11+$fprice12;

    ?>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div style="overflow-x:auto;">
    <table table id="table" class="table table-bordered table-striped mb-0">
      <col style="width:25%">
      <col style="width:10%">
      <col style="width:*">
      <tr class="tr_head" style="background-color:#FF0000">
        <th>Order</th>
        <th> ₹/P</th>
        <th> ₹ Price</th>
      <!-- <th>Last Name</th> -->
     </tr>
      <tbody id="myTable">
        <tr>
          <td><?php echo "$qty1 $D1N"; ?></td>
          <td><?php echo "$D1P"; ?></td>
          <td><?php echo "$fprice1"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty2 $D2N"; ?></td>
          <td><?php echo "$D2P"; ?></td>
          <td><?php echo "$fprice2"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty3 $D3N"; ?></td>
          <td><?php echo "$D3P"; ?></td>
          <td><?php echo "$fprice3"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty4 $D4N"; ?></td>
          <td><?php echo "$D4P"; ?></td>
          <td><?php echo "$fprice4"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty5 $D5N"; ?></td>
          <td><?php echo "$D5P"; ?></td>
          <td><?php echo "$fprice5"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty6 $D6N"; ?></td>
          <td><?php echo "$D6P"; ?></td>
          <td><?php echo "$fprice6"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty7 $D7N"; ?></td>
          <td><?php echo "$D7P"; ?></td>
          <td><?php echo "$fprice7"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty8 $D8N"; ?></td>
          <td><?php echo "$D8P"; ?></td>
          <td><?php echo "$fprice8"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty9 $D9N"; ?></td>
          <td><?php echo "$D9P"; ?></td>
          <td><?php echo "$fprice9"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty10 $D10N"; ?></td>
          <td><?php echo "$D10P"; ?></td>
          <td><?php echo "$fprice10"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty11 $D11N"; ?></td>
          <td><?php echo "$D11P"; ?></td>
          <td><?php echo "$fprice11"; ?></td>
        </tr>
        <tr>
          <td><?php echo "$qty12 $D12N"; ?></td>
          <td><?php echo "$D12P"; ?></td>
          <td><?php echo "$fprice12"; ?></td>
        </tr>
        <tr class="tr_total" style="background-color:#3fff00">
          <td>Total</td>
          <td></td>
          <td><?php echo "$total"; ?></td>
        </tr>

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
<input type="hidden" name="status" value="Confirmed"><br>
<center><input type=submit name=order class="confirm" value="Confirm Order"></center>
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
if(isset($_POST['order'])){
 $status = mysqli_real_escape_string($con,$_POST['status']);
 $dateI = date("Y-m-d h:i:sa");
 $sql_query_update = "UPDATE cstmr SET status='".$status."' ,waiter='".$Attname."' ,dateI='".$dateI."' WHERE id='".$o_id."'";
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
