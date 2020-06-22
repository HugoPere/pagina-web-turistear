<!DOCTYPE html>
<html lang="en">
<head>
<title>TuristeAR - Agregar lugar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/services_styles.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
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
				<li class="active"><a href="menu.html">Inicio</a></li>
				<li><a href="change_event.php">Cambiar un boton/información</a></li>
				<li><a href="create_place.php">Tomar un lugar/QR</a></li>
                <li><a href="create_project.php">Crear un proyecto</a></li>
				<li><a href="catalog.php">Ver modelos disponibles</a></li>
			</ul>
			
			<!-- Search -->
			
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
			<i class="fas fa-bars trans_200"></i>
		</div>
		
	</header>

	<!-- Menu -->

	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/home_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Crear un lugar</h2>
			
			</div>
		</div>
	
	</div>

	<!-- Service Boxes -->

	<!-- Device -->

	<!-- Call to action 2 -->

	<!-- Image Boxes -->

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col text-lg-center text-left">
					<div class="newsletter_content">

						<div class="newsletter_form_container">
							<div class="input-group">
							<form action="uploading_img.php" class="center" method="POST" enctype="multipart/form-data">
								<label for="titulo">
					      <span>Titulo</span>
					      <br>
					      <textarea  name="titulo"  required="true" placeholder="Max 50 caracteres"></textarea>
					      </label>
					      <br>
					      </label>
					      <label for="descripcion">
					      <span>Descripcion</span>
					      <br>
					      <textarea name="descripcion"  required="true" placeholder="Max 50 caracteres"></textarea>
					      </label>
					      <br>
					      </label>
					      <label for="img">
					      <span>Imagen</span>
					      <br>
					      <input type="file" name="img" required="true">
					      </label>
					      <br>
					      </label>
					      <label for="model">
					      <span>Elija un modelo</span>
					      <br>
					      <select name="model">
					          <?php
					          
					            $server = 'mysql.turistear.usmgames.cl';
								$usuario = "turistearadmin";
								$pass = "123ClaveAR";
								$database= "turistearmysql";
					            
					            $mysqli = new mysqli($server, $usuario, $pass, $database);
					          
					            $query = $mysqli -> query ("SELECT * FROM MODELOS");
					                    
					            while ($valores = mysqli_fetch_array($query)) {
					                echo '<option value="'.$valores[id].'">'.$valores[nombre].'</option>';
					            }
					              
					        ?>
					      </select>
					      <br>
					      <a href="catalog.php">Muestrario de modelos</a>
					      </label>
					      <br>
					      </label>
					      <label for="img">
					      <span>Elija un código QR</span>
					      <br>
					      <select name="qr">
					          <?php
					          
					            $server = 'mysql.turistear.usmgames.cl';
								$usuario = "turistearadmin";
								$pass = "123ClaveAR";
								$database= "turistearmysql";
					            
					            $mysqli = new mysqli($server, $usuario, $pass, $database);
					          
					            $query = $mysqli -> query ("SELECT * FROM QR_CODES");
					                    
					            while ($valores = mysqli_fetch_array($query)) {
					                if($valores[disponibilidad] == 0){
					                echo '<option value="'.$valores[id].'">'.$valores[id].'</option>';
					                }
					            }
					        ?>
					      </select>
					      </label>
					      <br>
					      <input class="button newsletter_submit_button trans_200" type="submit" value="Submit">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/services_custom.js"></script>
</body>

</html>