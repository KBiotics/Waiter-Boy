<?php
include '../config/config1.php';
$Attname=$_SESSION["attname"];
if ($Attname=='') {
  header("location:index.php");
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Maintanance</title>
    <style media="screen">
    .data{
      background-color: inherit;
      height: auto;
      width: auto;
      margin: 25px;
      padding: 10px;
      box-shadow: 5px 10px 40px rgba(0, 0, 0, 0.2);
    }
    </style>
  </head>
  <body>
<div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+ Owner</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Owner</h4>
        </div>
        <div class="modal-body">
          <center>New Waiter<center>
            <form class="" action="" method="post">
              <input type="text" class="name" name="name" value="" placeholder="Name" required>
              <input type="text" class="uname" name="username" value="" placeholder="Username" required>
              <input type="text"  class="passw"name="password" value="" placeholder="Password" required>
              <input type="submit"  class="submit" name="submit" value="Submit">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="data">
  <h2>Settings🏢</h2>
  <?php
  $sql_query2 = "SELECT * FROM `admin` WHERE id='1'";
  $result2 = mysqli_query($con,$sql_query2);
  while($row = mysqli_fetch_assoc($result2))
    {
      $fsite_rd=$row['fsite'];
      $odh_site_rd=$row['odh_site'];
      $odd_site_rd=$row['odd_site'];
    }
   ?>
  <form class="" action="" method="post">
    <label for="">Full Site</label><br>
    <input type="radio" name="fsite" value="E" <?php if ($fsite_rd=='E') {echo "checked";} ?> required>Enabled
    <input type="radio" name="fsite" value="D" <?php if ($fsite_rd=='D') {echo "checked";} ?> required>Disabled <br><br>
    <label for="">Online Orders (Home Delivary)</label><br>
    <input type="radio" name="odh_site" value="E" <?php if ($odh_site_rd=='E') {echo "checked";} ?> required>Enabled
    <input type="radio" name="odh_site" value="D" <?php if ($odh_site_rd=='D') {echo "checked";} ?> required>Disabled <br><br>
    <label for="">Online Orders (Dine - In)</label><br>
    <input type="radio" name="odd_site" value="E" <?php if ($odd_site_rd=='E') {echo "checked";} ?> required>Enabled
    <input type="radio" name="odd_site" value="D" <?php if ($odd_site_rd=='D') {echo "checked";} ?> required>Disabled <br><br>
    <input type="submit" name="update" value="Update">
  </form>
</div>

</body>
</html>

<?php
if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($con,$_POST['name']);
$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$sql_query_insert = "INSERT INTO owner(name, username, password) values ('$name','$username','$password')";
$result_insert = mysqli_query($con,$sql_query_insert);
 if($result_insert==0)
 {
   echo "not inserted";

 }
 else
 {
   //echo "sucessfully inserted";
   ?><script>

            alert("Sucessfull");
            </script>
     <?php
 }

 }
 ?>

 <?php
 if(isset($_POST['update'])){
 $fsite = mysqli_real_escape_string($con,$_POST['fsite']);
 $odh_site = mysqli_real_escape_string($con,$_POST['odh_site']);
 $odd_site = mysqli_real_escape_string($con,$_POST['odd_site']);
 $o_ref="1";
 $sql_query_update = "UPDATE admin SET fsite='".$fsite."',odh_site='".$odh_site."',odd_site='".$odd_site."' WHERE id='".$o_ref."'";
 $result_update = mysqli_query($con,$sql_query_update);
  if($result_update==0)
  {
    echo "not inserted";

  }
  else
  {
    //echo "sucessfully inserted";
    ?><script>

             alert("Sucessfull");
             window.location.href = "new_owner.php";
             </script>
      <?php
  }

  }
  ?>
