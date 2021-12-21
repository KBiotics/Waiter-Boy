<?php
include 'config/config1.php';
$Wid = mysqli_real_escape_string($con,$_POST['rem_w']);
echo "$Wid";
$sql_query_update = "DELETE FROM delivary_guys WHERE id='".$Wid."'";
$result_update = mysqli_query($con,$sql_query_update);
  if($result_update==0)
  {
    ?><script>

             alert("Something went Wrong");
             </script>
      <?php
      ?>    <script>
           window.location.href = "owner_delivary_guys.php";
            </script>
        <?php
  }
  else
  {
    //echo "sucessfully updated";
    ?>    <script>
         window.location.href = "owner_delivary_guys.php";
          </script>
      <?php
  }
?>
