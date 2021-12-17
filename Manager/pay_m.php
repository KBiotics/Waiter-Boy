<?php
include '../config/config1.php';
$Attname=$_SESSION["attname"];
 if(isset($_POST['payment'])){
   $pay_m=mysqli_real_escape_string($con,$_POST['paym']);
   $o_ref = mysqli_real_escape_string($con,$_POST['o_id']);
   $total = mysqli_real_escape_string($con,$_POST['total']);
   $dateIII = date("Y-m-d h:i:sa");
   echo "$pay_m";
   $sql_query_update = "UPDATE cstmr SET pay_m='".$pay_m."' ,dateIII='".$dateIII."' ,total='".$total."' ,manager='".$Attname."' WHERE id='".$o_ref."'";
   $result_update = mysqli_query($con,$sql_query_update);
     if($result_update==0)
     {
       ?><script>

                alert("Something went Wrong");
                </script>
         <?php
         ?>    <script>
              window.location.href = "manager.php";
               </script>
           <?php
     }
     else
     {
       //echo "sucessfully updated";
       ?>    <script>
            window.location.href = "manager.php";
             </script>
         <?php
     }
  }
  ?>
