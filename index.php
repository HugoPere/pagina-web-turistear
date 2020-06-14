<?php

  session_start();
  
  $username = "user";
  $password = "password";

  if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
      header("location: menu.html");
  }
  
  if (isset ($_POST['usuario']) && isset($_POST['password'])){
      if($_POST['usuario'] == $username && $_POST['password'] == $password){
          $_SESSION['logged_in'] = true;
          header("location:menu.html");
      }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>TuristeAR - Log In</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button2 {background-color: #800080;} /* Blue */

</style>
</head>

<body>

<div class="super_container">
	<!-- Header -->
	<header class="header d-flex flex-row justify-content-end align-items-center trans_200">
		<!-- Logo -->
		<div class="logo mr-auto">
			<a href="#">Turiste<span>AR</span></a>
		</div>
		<!-- Navigation -->
		<nav class="main_nav justify-self-end text-right">
			<ul>
			</ul>
			<!-- Search -->
			
		</nav>

		
		
	</header>

	<!-- Menu -->

	

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/blog_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Ingreso</h2>
			<div class="reply_form_container">
							
					<!-- Reply Form -->
					<form action="loggerX.php" method="POST">
					<input id ="usuario" name="usuario" type="text" placeholder="Ingrese su usuario">
      				<input id ="password" name="password" type="password" placeholder="Ingrese su contraseña">
      				<br>
      				<input type="submit" class="button button2" value="Ingresar">

					</form>

				</div>
		</div>
	
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/CustomGoogleMapMarker.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>