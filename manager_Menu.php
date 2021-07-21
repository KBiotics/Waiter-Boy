<?php
include 'config1.php';
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
     <a  href="manager.php">Home</a>
     <a class="active" href="manager_Menu.php">Menu</a>
     <a href="manager_waiters.php">Waiters</a>
   </div>
 </div>

 <div class="container">
   <!-- Trigger the modal with a button -->
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+ Manu</button>

   <!-- Modal -->
   <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Modal Header</h4>
         </div>
         <div class="modal-body">
           <center>New Dish<center>
             <form class="" action="" method="post">
               <input type="text" name="Dname" value="" placeholder="Dish Name">
               <input type="text" name="Dprice" value="" placeholder="Price">
               <input type="submit" name="submit" value="submit">
             </form>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
       </div>
     </div>
   </div>
 </div>

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
        //echo "<td>" . $row['lname'] . "</td>";

            echo "</tr>";
      }?>
    </table>
    </div>
  </div>

 </div>

 </body>
 </html>

 <?php
 if(isset($_POST['submit'])){
 $Dname = mysqli_real_escape_string($con,$_POST['Dname']);
 $Dprice = mysqli_real_escape_string($con,$_POST['Dprice']);
 $Stackt = "a";
 $sql_query_insert = "INSERT INTO menu(Dname, Dprice, StackT) values ('$Dname',' $Dprice','$Stackt')";
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
