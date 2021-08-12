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
 .modify{
   margin: auto;
   padding: 30px 150px;
   background-color: rgb(132, 18, 200);
   color: white;
   font-weight: bolder;
   font-size: 18px;
   border-radius: 10px;
 }
 .modify:hover{
   background-color: rgb(24, 217, 162);
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
   .modify{
     margin: auto;
     padding: 12px 70px;
     background-color: rgb(132, 18, 200);
     color: white;
     font-weight: bolder;
     font-size: 18px;
     border-radius: 10px;
   }
 }
 </style>
 </head>
 <body>

 <div class="header">
   <a href="manager.php" class="logo"><img src="meta/logo.png" alt="logo" class="logo"></a>
   <div class="header-right">
     <a  href="manager.php">Home<img src="meta//home.png" alt="" height"50" width="50"></a>
     <a class="active" href="manager_Menu.php">Menu <img src="meta//menu.png" alt="" height"50" width="50"></a>
     <a href="manager_waiters.php">Waiters<img src="meta//waiter.png" alt="" height"50" width="50"></a>
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
      <col style="width:60%">
      <col style="width:25%">
      <col style="width:25%">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th> ₹ Price</th>
        <th> Modify</th>
      <!-- <th>Last Name</th> -->
     </tr>
      <tbody id="myTable">
    <?php while($row = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['Dname'] . "</td>";
            echo "<td>" . $row['Dprice'] ."</td>";
            echo "<td> <input type=radio name= value=></td>";
            echo "</tr>";
      }?>
    </table>
    </div>
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
  <form class="" action="" method="post">
    <input type="hidden" name="id" id="id"><br>
    <center><input type="submit" class="modify" name="idcall" value="Select and Modify"></center>
  </form>
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
 if(isset($_POST['idcall'])){
 $id_m = mysqli_real_escape_string($con,$_POST['id']);
 echo "$id_m";
 $sql_query_v = "SELECT * FROM `menu` WHERE id='".$id_m."' ";
$result_v = mysqli_query($con,$sql_query_v);
 while($row = mysqli_fetch_assoc($result_v))
   {
      $id=$row['id'];
      $Dname=$row['Dname'];
      $Dprice=$row['Dprice'];
   }
   ?>
   <input type="hidden" id=auth-button class="btn btn-info" btn-lg data-toggle="modal" data-target="#myModal2" name="" value="">
<script>
var authorize = function(){
	//alert("clicked");
}
var authButton= document.getElementById('auth-button');
authButton.addEventListener('click', authorize);
document.addEventListener('DOMContentLoaded', function() {
		console.log("ok");
   	authButton.click();
}, false);
</script>
   <?php
 }
  ?>
 <!-- Modal2 -->
 <div class="modal fade" id="myModal2" role="dialog">
   <div class="modal-dialog modal-lg">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Modify Dish to Menu</h4>
       </div>
       <div class="modal-body">
         <center>Modify Dish<center>
           <form class="" action="" method="post">
             <input type="hidden" name="id" value="<?php echo "$id"; ?>">
             <input type="text" class="Dname" name="Dname" value="<?php echo "$Dname"; ?>" placeholder="Dish Name" required>
             <input type="text" class="Dprice" name="Dprice" value="<?php echo "$Dprice" ?>" placeholder="Price" required>
             <input type="submit" class="submit" name="update" value="Submit">
           </form>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
   </div>
 </div>
</div>

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

  <?php
  if(isset($_POST['update'])){
    $Did = mysqli_real_escape_string($con,$_POST['id']);
    $Dname = mysqli_real_escape_string($con,$_POST['Dname']);
    $Dprice = mysqli_real_escape_string($con,$_POST['Dprice']);
    echo "$Did";
    $sql_query_update = "UPDATE menu SET Dname='".$Dname."' ,Dprice='".$Dprice."' WHERE id='".$Did."'";
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
      }?><?php
  }
   ?>
