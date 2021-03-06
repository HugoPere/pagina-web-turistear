<!DOCTYPE html>
<html lang="en">
<head>
<title>TuristeAR - Modelos</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/portfolio_styles.css">
<link rel="stylesheet" type="text/css" href="styles/portfolio_responsive.css">
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
				<li><a href="change_event.php">Cambiar un lugar</a></li>
                <li><a href="create_project.php">Crear un proyecto</a></li>
                <li><a href="assign_project.php">Asignar un lugar/QR</a></li>
				<li><a href="catalog.php">Catalogo de modelos</a></li>		
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
			<div class="home_background prlx" style="background-image:url(images/portfolio_background.jpg)"></div>
		</div>
		
		<div class="home_title">
			<h2>Catalogo de modelos</h2>
			
		</div>
	
	</div>

	<!-- Portfolio -->

	<div class="portfolio">
		
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="portfolio_items product-grid">

						<h2>Estos son los modelos actualmente disponibles</h2>
          <?php
          
            $server = 'mysql.turistear.usmgames.cl';
$usuario = "turistearadmin";
$pass = "123ClaveAR";
$database= "turistearmysql";
            
            $mysqli = new mysqli($server, $usuario, $pass, $database);
          
            $query = $mysqli -> query ("SELECT * FROM MODELOS");
                    
            while ($valores = mysqli_fetch_array($query)) {
                echo "<h3>".$valores['nombre']."</h3>" ;
                echo "<br>";
                echo "<img src= ".$valores['path']." >";
                echo "<br>";
                echo "<h3>".$valores['descripcion']."</h3>" ;
            }
              
        ?>
        

						
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
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/portfolio_custom.js"></script>
</body>

</html>