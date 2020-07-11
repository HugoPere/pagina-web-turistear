<?php
$id_user=$_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TuristeAR - Cambiar un evento</title>
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
<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
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
			<h2>Cambiar una situación</h2>
			
		</div>
	
	</div>

	<!-- Icon Boxes -->
	<!-- Vertical Slider Section -->

	<!-- Team -->

	<!-- Clients -->

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			
				<div class="col text-lg-center text-left">
					<div class="newsletter_content">

						<!-- Newsletter Form -->
						<div class="newsletter_form_container">
							<form action="update.php" class="center" method="POST" enctype="multipart/form-data">
								<label for="id"><span>Elija un evento a cambiar</span>
							    <br>
							      <select name="id">
							          
							          <?php
							          
							            $server = 'mysql.turistear.usmgames.cl';
							            $usuario = "turistearadmin";
							            $pass = "123ClaveAR";
							            $database= "turistearmysql";
							            
							            $mysqli = new mysqli($server, $usuario, $pass, $database);

                                        $query = $mysqli -> query ("SELECT * FROM USUARIOS WHERE id=$id_user");

                                        while ($valores = mysqli_fetch_array($query)) {
							                $id_proyecto = $valores[id_proyecto];
							            }

                                        $query = $mysqli -> query ("SELECT * FROM QR_CODES WHERE user_assigned=$id_user");
                                        while ($valores = mysqli_fetch_array($query)) {
							                $id_qr = $valores[id];
                                            $nombre_proyecto = $valores[nombre_proyecto];
                                            $query = $mysqli -> query ("SELECT * FROM INFORMACION_EVENTOS WHERE id_qr=$id_qr");
							                while ($valores = mysqli_fetch_array($query)) {
							                    echo '<option value="'.$valores[id].'">'.$valores[titulo]. ' que pertenece a '.$valores[lugar]. '</option>';
							                }
							            }
							        ?>
							      </select>
							      
							      </label>
							      <br>
							      <label for="descripcion">
                                  <span>Nombre</span>
							      <br>
							      <textarea name="name" onkeyup="adjust_textarea(this)" required="true" placeholder="Max 50 caracteres"></textarea>
                                  <br>
							      <span>Descripcion y link (IE: Uber Eats)</span>
							      <br>
							      <textarea name="descripcion" onkeyup="adjust_textarea(this)" required="true" placeholder="Max 50 caracteres"></textarea>
                                  <br>
                                  <label for="img">
                                  <span>Imagen</span>
                                  <br>
                                  <input type="file" name="img" required="true">
                                  </label>
                                  <br>
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

                                    <a href="user_catalog.php" target="_blank">Muestrario de modelos</a>
                                    </label>
                                    <br>
                                    <label for="link">
                                    <span>Link del servicio (Ejemplo: Uber Eats)</span>
							        <br>
							        <textarea name="link" onkeyup="adjust_textarea(this)" required="true" placeholder="Ex: servicio.com/tienda"></textarea>
                                    <br>
                                    </label>
							      </label>
							      <br>
							      <input class="button newsletter_submit_button trans_200" type="submit" value="Submit">
							</form>
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
<script src="js/about_custom.js"></script>
</body>

</html>