<?php
include 'config/config1.php';
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
 .Dlist{
   background-color: white;
   padding: 10px 10px;
   margin-top: 10px;
   margin: 10px;
 }
 table{
   background-color: rgb(178, 200, 171);
   table-layout:fixed;
   width:100%;
 }
 * {
   word-wrap:break-word;
 }
 .search{
 margin-left: 5px;
 margin-top: 10px;
 width: 97%;
 padding: 10px;
 }
 .Dname{
   font-size: 23px;
   margin: 5px;
 }
 .Dprice{
   font-size: 23px;
 }
 .submit{
   font-size: 23px;
   margin: 5px;
   color: white;
   background-color: rgb(125, 230, 90);
   border: none;
   padding: 5px 5px;
 }
 .submit:hover{
   background-color: rgb(62, 247, 0);
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
   <a href="owner.php" class="logo"><img src="meta/logo.png" alt="logo" class="logo"></a>
   <div class="header-right">
     <a href="owner.php">Home <img src="meta//home.png" alt="" height"50" width="50"></a>
     <a href="owner_manager.php">Managers <img src="meta//manager.png" alt="" height"50" width="50"></a>
     <a class="active" href="owner_Menu.php">Menu <img src="meta//menu.png" alt="" height"50" width="50"></a>
     <a href="owner_stock.php">Stocks<img src="meta//stock.png" alt="" height"50" width="50"></a>
     <a href="owner_waiters.php">Waiters<img src="meta//waiter.png" alt="" height"50" width="50"></a>
   </div>
 </div>

 <div class="container">
   <!-- Trigger the modal with a button -->
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+ Menu</button>

   <!-- Modal -->
   <div class="modal fade" id="myModal" role="dialog">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">Add New Dish to Menu</h4>
         </div>
         <div class="modal-body">
           <center>New Dish<center>
             <form class="" action="" method="post">
               <input type="text" class="Dname" name="Dname" value="" placeholder="Dish Name" required>
               <input type="text" class="Dprice" name="Dprice" value="" placeholder="Price" required>
               <?php
               $sql_query_s = "SELECT * FROM `stock` ";
$result_s = mysqli_query($con,$sql_query_s);
                ?>
               <select class="Dname" name="mang_stock">
                 <?php while($row_s = mysqli_fetch_array($result_s)):;?>
                   <?php $option_id=$row_s['0'];  $option=$row_s['1'] ?>
                 <option value="<?php echo $option_id?>"><?php echo $option ?></option>
               <?php endwhile?>
               </select>
               <input type="submit" class="submit" name="submit" value="Submit">
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
   <input class="search" type="search" id="myInput" onkeyup="myFunction()" placeholder="Search for Verity of Aviable Dishes"/>
   <?php
   $sql_query1 = "SELECT * FROM `menu` ";
$result = mysqli_query($con,$sql_query1);
    ?>
    <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <div style="overflow-x:auto;">
    <table table id="table" class="table table-bordered table-striped mb-0">
      <col style="width:15%">
      <col style="width:50%">
      <col style="width:25%">
      <col style="width:25%">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th> ₹ Price</th>
        <th>Used</th>
      <!-- <th>Last Name</th> -->
     </tr>
      <tbody id="myTable">
    <?php while($row = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Dname'] . "</td>";
            echo "<td>" . $row['Dprice'] ."</td>";
            echo "<td>" . $row['mang_stock'] ."</td>";
        //echo "<td>" . $row['lname'] . "</td>";

            echo "</tr>";
      }?>
    </table>
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

 <?php
 if(isset($_POST['submit'])){
 $Dname = mysqli_real_escape_string($con,$_POST['Dname']);
 $Dprice = mysqli_real_escape_string($con,$_POST['Dprice']);
 $mang_stock = mysqli_real_escape_string($con,$_POST['mang_stock']);
 $Stackt = "a";
 $sql_query_insert = "INSERT INTO menu(Dname, Dprice, mang_stock_id, StackT) values ('$Dname',' $Dprice',' $mang_stock','$Stackt')";
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
