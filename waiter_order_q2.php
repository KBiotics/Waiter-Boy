<?php
include 'config/config1.php';
$Attname=$_SESSION["attname"];
if ($Attname=='') {
  header("location:index.php");
}
$o_id=$_SESSION["order_id"];
 ?>
<?php
if(isset($_POST['atp'])){
  $D="D";
  $qty="qty";
  $sql_query1 = "SELECT * FROM `cstmr`WHERE id='".$o_id."'" ;
          $result = mysqli_query($con,$sql_query1);
      while($row = mysqli_fetch_assoc($result))
      {
        $status_order=$row['status'];
       $D_temp=$row['D_temp'];
       $qty_temp=$row['qty_temp'];

       $D_temp=$D_temp+1;
       $qty_temp=$qty_temp+1;
       echo "$qty_temp";
      }
      $D="$D$D_temp";
      $qty="$qty$qty_temp";

if ($status_order!="Order in Progress") {
  $_SESSION["order_id"]=$o_id;
  ?><script>

           alert("Order has Confirmed Allready ! \n To Order more Start a New Order.");
           </script>
    <?php
    ?>    <script>
         window.location.href = "waiter_order.php";
          </script>
      <?php
}
else {
 $Dname = mysqli_real_escape_string($con,$_POST['id']);
 $qtyo = mysqli_real_escape_string($con,$_POST['qty']);
 $sql_query_update = "UPDATE cstmr SET $D='".$Dname."' ,$qty='".$qtyo."' ,D_temp='".$D_temp."' ,qty_temp='".$qty_temp."' WHERE id='".$o_id."'";
 $result_update = mysqli_query($con,$sql_query_update);
   if($result_update==0)
   {
     $_SESSION["order_id"]=$o_id;
     ?><script>

              alert("Something went Wrong");
              </script>
       <?php
       ?>    <script>
            window.location.href = "waiter_order.php";
             </script>
         <?php

   }
   else
   {
     //echo "sucessfully updated";
     $sql_query1 = "SELECT * FROM `menu`WHERE id='".$Dname."'" ;
             $result = mysqli_query($con,$sql_query1);
         while($row = mysqli_fetch_assoc($result))
         {
          $stock_id=$row['mang_stock_id'];
        }
     $stock="$stock_id";
     $stock_qty="$qtyo";
     $sql_query_update_stock = "UPDATE stock SET s_tps=s_tps-$stock_qty WHERE id='".$stock."'";
     $result_update_stock = mysqli_query($con,$sql_query_update_stock);
       if($result_update_stock==0)
       {
         //echo "not updated";

       }
       else
       {
        // echo "Stock updated";
       }
     $_SESSION["order_id"]=$o_id;
     ?><script>

              alert("Pan sucessfully updated");
              </script>
       <?php
       ?>    <script>
            window.location.href = "waiter_order.php";
             </script>
         <?php
   }
   }
?>
   <div class="pan">
     <?php echo $D_temp ?>
   </div>
   <?php

   }
 ?>
