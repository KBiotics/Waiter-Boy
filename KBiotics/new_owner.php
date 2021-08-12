<?php
include 'config1.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
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
