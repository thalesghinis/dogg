<!DOCTYPE HTML>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>DOGG.pet</title>
	@include('layouts.head')
</head>

<body>
	@include('layouts.header')
	<div class="colorlib-loader"></div>

	<div id="page">
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/mulherdog.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner slider-text-inner2 text-center">
										<h1>Conheça</h1>
										<h2>A DOGG</h2>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>
		<div id="colorlib-amenities">
			<div class="container">
				<div class="row">
					<div class="amenities-flex">
						<div class="amenities-img animate-box" style="background-image: url(images/whitelab.jpg);">
						</div>
						<div class="desc animate-box">
							<h2><a href="#"></a>Conheça</h2>
							<p class="price">
								<span class="free">Amor pelos animais</span>
							</p>
							<p>A DOGG tem como sua principal idéia, desde 2019, trazer para todas as pessoas 
							que amam seus bichinhos, segurança, cuidado e amor. Não somos apenas um lugar.					
						</p>
						</div>
						<div class="desc animate-box">
							<h2><a href="#"> "Podemos julgar o coração de um homem pela forma como ele trata os animais." </a></h2>
							<p class="price">
								<span class="free">Nossos valores</span>
							</p>
							<li>Comportamento</li>
							<li>Segurança</li>
							<li>Parceria</li>
							<li>Cuidado</li>
						</div>
						
						<div class="amenities-img animate-box" style="background-image: url(images/lambidagato.jpg);">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-subscribe" style="background-image: url(images/dog-5.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
								class="icon-star-full"></i><i class="icon-star-full"></i><i
								class="icon-star-full"></i></span>
								<h2>Cadastre-se</h2>
                    <p>Receba 50% de desconto na primeira reserva, corre lá!</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email"
											placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	@include('layouts.foot')
</body>

</html>