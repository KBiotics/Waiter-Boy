<?php
include '../config/config1.php';
if(isset($_POST['auto_sound'])){
  $sound = mysqli_real_escape_string($con,$_POST['auto_sound']);
  $sql_query_update = "UPDATE control SET delivery_boy_sound ='".$sound."' WHERE id='1'";
  $result_update = mysqli_query($con,$sql_query_update);
    if($result_update==0)
    {
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
