{{-- {{asset('assets/ --}}
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>POSPRO_LARAVEL</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	<meta content="Bertho Erizal" name="author">

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

	<!-- Bootstrap css -->
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<link href="{{asset('assets/welcome/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/welcome/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/welcome/lib/owlcarousel/assets/owl.theme.default.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/welcome/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/welcome/lib/animate/animate.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/welcome/lib/modal-video/css/modal-video.min.css')}}" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="{{asset('assets/welcome/css/style.css')}}" rel="stylesheet">

	<!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

	<header id="header" class="header header-hide">
		<div class="container">

			<div id="logo" class="pull-left">
				<!-- <h1><a href="#body" class="scrollto"><b>POSPRO-CI</b></a></h1> -->
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
			</div>

			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<li><a href="{{ route('login')}}">Login</a></li>
					<li><a href="{{ route('register')}}">Register</a></li>
				</ul>
			</nav><!-- #nav-menu-container -->
		</div>
	</header><!-- #header -->

	<!--==========================
    Hero Section
  ============================-->
	<section id="hero" class="wow fadeIn">
		<div class="hero-container">
			<br>
			<h1>Welcome to POSPRO_LARAVEL</h1>
			<img src="{{asset('assets/welcome/img/hero-img.PNG')}}" alt="Hero Imgs">
			<a href="#get-started" class="btn-get-started scrollto">Bertho Erizal</a>
		</div>
	</section><!-- #hero -->

	<!-- JavaScript Libraries -->
	<script src="{{asset('assets/welcome/lib/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('assets/welcome/lib/jquery/jquery-migrate.min.js')}}"></script>
	<script src="{{asset('assets/welcome/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/welcome/lib/superfish/hoverIntent.js')}}"></script>
	<script src="{{asset('assets/welcome/lib/superfish/superfish.min.js')}}"></script>
	<script src="{{asset('assets/welcome/lib/easing/easing.min.js')}}"></script>
	<script src="{{asset('assets/welcome/lib/modal-video/js/modal-video.js')}}"></script>
	<script src="{{asset('assets/welcome/lib/owlcarousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/welcome/lib/wow/wow.min.js')}}"></script>
	<!-- Contact Form JavaScript File -->
	<script src="{{asset('assets/welcome/contactform/contactform.js')}}"></script>

	<!-- Template Main Javascript File -->
	<script src="{{asset('assets/welcome/js/main.js')}}"></script>

</body>

</html>