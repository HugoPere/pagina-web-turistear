
<!DOCTYPE html>
<html lang="en">
<head>
<title>TuristeAR - Home</title>
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
<link href="plugins/icon-font/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
				<li class="active"><a href="user_menu.php?id=$id">Inicio</a></li>
				<li><a href="user_change_event.php?id=$id">Cambiar un boton/información</a></li>
				<li><a href="catalog.php">Ver modelos disponibles</a></li>			
			</ul>
			
			<!-- Search -->
			
		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
			<i class="fas fa-bars trans_200"></i>
		</div>
		
	</header>

	<!-- Menu -->

	

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/slider_background.jpg)"></div>
		</div>
		
		<!-- Hero Slider -->
		<div class="hero_slider_container">
			
			<!-- Slider -->
			<div class="owl-carousel owl-theme hero_slider">

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span>Crea nuevos lugares</span>
					<span><img src="images/colorlib.png" alt=""></span>
					<span>AR</span>
					<span> </span>
				</div>

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span>Edita lugares y</span>
					<span><img src="images/colorlib.png" alt=""></span>
					<span>AR</span>
					<span></span>
				</div>

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span>Crea nuevos eventos</span>
					<span><img src="images/colorlib.png" alt=""></span>
					<span>AR</span>
					<span></span>
				</div>

			</div>
			
			<!-- Hero Slider Navigation Left -->
			<div class="hero_slider_nav hero_slider_nav_left">
				<div class="hero_slider_prev d-flex flex-column align-items-center justify-content-center trans_200">
					<i class="fas fa-chevron-left trans_200"></i>
				</div>
			</div>

			<!-- Hero Slider Navigation Right -->
			<div class="hero_slider_nav hero_slider_nav_right">
				<div class="hero_slider_next d-flex flex-column align-items-center justify-content-center trans_200">
					<i class="fas fa-chevron-right trans_200"></i>
				</div>
			</div>

		</div>

		
		
		<div class="next_section_scroll">
			<div class="next_section nav_links" data-scroll-to=".icon_boxes">
				<i class="fas fa-chevron-down trans_200"></i>
				<i class="fas fa-chevron-down trans_200"></i>
			</div>
		</div>
			
	</div>

	<!-- Icon Boxes -->

	

	<!-- Vertical Slider Section -->

	

	<!-- Services -->

	

	<!-- Features -->

	

	<!-- Call to action -->

	
	<!-- Text Line -->

	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col text-lg-center text-left">
					<div class="newsletter_content">

						<!-- Newsletter Title -->
						<div class="newsletter_title">
							<h1>Contacto</h1>
							<span></span>
						</div>
						
						<!-- Newsletter Form -->
						<div class="newsletter_form_container">
							<form action="#">
								<div class="input-group">
									<input type="email" class="newsletter_email" placeholder="Your e-mail address here" required="required" data-error="Valid email address is required.">
									<button id="newsletter_form_submit" type="submit" class="button newsletter_submit_button trans_200" value="Submit">
										subscribe
									</button>
								</div>
									
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
<script src="js/custom.js"></script>
</body>

</html>