<?php
include "config1.php";
 ?>
<style media="screen">
body {
background: #FFF;
margin: 0;
padding: 0;
font-family: 'Century Gothic', CenturyGothic, AppleGothic, sans-serif;font-weight: light;
font-weight: 100;
}

.loginWrapper {
display: block;
position: relative;
width: 350px;
text-align: center;
margin: auto;
right: 0;
left: 0;
margin-top: 60px;
margin-bottom: 60px;
z-index: 1000;
transition: box-shadow 1s;
}

.logginFormFooter {
text-align: center;
color: #777;
width: 100%;
font-size: 12px;
position: fixed;
bottom: 10px;
}

.logginFormFooter a       {color: #777; font-weight: 600;}
.logginFormFooter a:hover {color: #AAA;}

* {
box-sizing: border-box;
padding: 0;
margin: 0;
}

nav {
z-index: 9;
color: #FFF;
position: fixed;
top: 0;
left: 0;
width: 100%;
padding: 20px 0;
text-align: center;
}

.tabs {
display: table;
table-layout: fixed;
width: 100%;
-webkit-transform: translateY(5px);
transform: translateY(5px);
}

.tabs > li {
transition-duration: .25s;
display: table-cell;
list-style: none;
text-align: center;
padding: 20px 20px 25px 7px;
position: relative;
overflow: hidden;
cursor: pointer;
color: #666;
background-color: none;

}
.tabs > li:before {
z-index: -1;
position: absolute;
content: "";
width: 100%;
height: 120%;
color: #FFF;
top: 0;
left: 0;
background-color: #DDD;
-webkit-transform: translateY(100%);
transform: translateY(100%);
transition-duration: .25s;
border-radius: 8px 8px 0 0;
}

.tabs > li:hover:before {
-webkit-transform: translateY(70%);
transform: translateY(70%);
}
.tabs > li.active {
color: #FFF;
}
.tabs > li.active:before {
transition-duration: .5s;
background-color: #444;
-webkit-transform: translateY(0);
transform: translateY(0);
}

.tab__content {
background-color: white;
position: relative;
width: 100%;
border-radius: 5px 5px 0px 0px;
background-color: #444;
-webkit-box-shadow: 0px 12px 34px -8px rgba(0,0,0,0.28);
-moz-box-shadow: 0px 12px 34px -8px rgba(0,0,0,0.28);
box-shadow: 0px 12px 34px -8px rgba(0,0,0,0.28);

}
.tab__content > li {
width: 100%;
position: absolute;
border-radius: 5px;
color: #FFF;
top: 0;
left: 0;
background-color: #444;
display: none;
list-style: none;
}
.tab__content > li .content__wrapper {
text-align: center;
border-radius: 5px;
padding-top: 24px;
background-color: #444;
}


form input {
border: none;
padding: 12px;
background: #EEE;
font-size: 16px;
margin: 12px 0px;
width: 300px;
font-weight: 100;
  outline: none;
}

form input:first-child {margin-top: 8px;}
form input:last-child {margin-top: 16px; margin-bottom: 0px;}

form input:focus {background-color: #FFF;}
form input:hover {background-color: #FFF;}
form input:placeholder {color: blue;}

form [type="submit"]:focus,
form [type="submit"]:hover {background: #009CEF;}

form [type="submit"] {
background: #3399DD;
color: #FFF;
padding: 24px;
width: 100%;
cursor: pointer;
}

::-webkit-input-placeholder {color: #DDD;}
:-moz-placeholder           {color: #DDD;}
::-moz-placeholder          {color: #DDD;}
:-ms-input-placeholder      {color: #DDD;}

.logo{
  height: 100px;
  width: 100px;
}

@media screen and (max-width: 500px) {
  .loginWrapper{
    width: auto;
  }

}
</style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <section class="loginWrapper">
<img src="logo.ico" alt="logo" class="logo"><br>
<h2>Login</h2>
	<ul class="tabs">
		<li class="active">Admin</li>
	</ul>

	<ul class="tab__content">

		<li class="active">
			<div class="content__wrapper">
				<form method="POST" action="">
					<input type="name" name="name" placeholder="Username" required>
					<input type="password" name="password" placeholder="Password" required>
					<input type="submit" value="Login" name="alogin">
				</form>
			</div>
		</li>

	</ul>

</section>

  </body>
</html>

<script type="text/javascript">
$(document).ready(function(){

  // Variables
  var clickedTab = $(".tabs > .active");
  var tabWrapper = $(".tab__content");
  var activeTab = tabWrapper.find(".active");
  var activeTabHeight = activeTab.outerHeight();

  // Show tab on page load
  activeTab.show();

  // Set height of wrapper on page load
  tabWrapper.height(activeTabHeight);

  $(".tabs > li").on("click", function() {

      // Remove class from active tab
      $(".tabs > li").removeClass("active");

      // Add class active to clicked tab
      $(this).addClass("active");

      // Update clickedTab variable
      clickedTab = $(".tabs .active");

      // fade out active tab
      activeTab.fadeOut(250, function() {

          // Remove active class all tabs
          $(".tab__content > li").removeClass("active");

          // Get index of clicked tab
          var clickedTabIndex = clickedTab.index();

          // Add class active to corresponding tab
          $(".tab__content > li").eq(clickedTabIndex).addClass("active");

          // update new active tab
          activeTab = $(".tab__content > .active");

          // Update variable
          activeTabHeight = activeTab.outerHeight();

          // Animate height of wrapper to new tab height
          tabWrapper.stop().delay(50).animate({
              height: activeTabHeight
          }, 500, function() {

              // Fade in active tab
              activeTab.delay(50).fadeIn(250);

          });
      });
  });
});


</script>

<?php

if(isset($_POST['alogin'])){

    $email = mysqli_real_escape_string($con,$_POST['name']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
   if ($email != "" && $password != ""){

        $sql_query = "SELECT * FROM `admin` WHERE username='".$email."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_assoc($result);
		if($row!=0){
			do
			{
						    ?>  <script>

              window.location.href = "new_owner.php";
               </script>
			<?php

			}while($row = mysqli_fetch_assoc($result));
			}

		else{
            ?>  <script>

               alert("Invalid ID or Password");
               </script>
			<?php

		}

    }
      else{
		       echo "Username or Password missing !";

	  }
}
 ?>

 <?php
