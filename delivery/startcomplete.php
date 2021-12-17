<?php
include '../config/config1.php';
if(isset($_POST['start'])){
  $status="Out for Delivery";
  $o_ref = mysqli_real_escape_string($con,$_POST['o_id']);
  $sql_query_update = "UPDATE cstmr SET status='".$status."' WHERE id='".$o_ref."'";
  $result_update = mysqli_query($con,$sql_query_update);
    if($result_update==0)
    {
      ?><script>

               alert("Something went Wrong");
               </script>
        <?php
        ?>    <script>
             window.location.href = "index.php";
              </script>
          <?php
    }
    else
    {
      //echo "sucessfully updated";
      ?>    <script>
           window.location.href = "index.php";
            </script>
        <?php
    }
 }
 ?>
 <?php
 if(isset($_POST['complete'])){
   $status="Delivered";
   $o_ref = mysqli_real_escape_string($con,$_POST['o_idc']);
   $dateII = date("Y-m-d h:i:sa");
   $sql_query_update = "UPDATE cstmr SET status='".$status."' ,dateII='".$dateII."' WHERE id='".$o_ref."'";
   $result_update = mysqli_query($con,$sql_query_update);
     if($result_update==0)
     {
       ?><script>

                alert("Something went Wrong");
                </script>
         <?php
         ?>    <script>
              window.location.href = "index.php";
               </script>
           <?php
     }
     else
     {
       //echo "sucessfully updated";
       ?>    <script>
            window.location.href = "index.php";
             </script>
         <?php
     }
  }
  ?>
