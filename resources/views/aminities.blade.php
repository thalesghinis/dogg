<!DOCTYPE HTML>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Valores</title>
	@include('layouts.head')
</head>

<body>
	@include('layouts.header')
	<div class="colorlib-loader"></div>

	<div id="page">
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/dogview.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner slider-text-inner2 text-center">
										<h1>Cuidando</h1>
										<h2> de quem você mais ama</h2>
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
						<div class="amenities-img animate-box" style="background-image: url(images/amenities-1.jpg);">
						</div>
						<div class="desc animate-box">
							<h2><a href="#">Frase inspiradora</a></h2>
							<p class="price">
								<span class="free">Nossa motivação</span>
							</p>
							<p>Acreditamos que o amor por pets é representado com comportamento.
							Quem ama se especializa para entregar a melhor experiência e segurança
							que um pet pode ter.

							Quem é tutor, procura por um alguém com paixão, que esteja em um local confiavel,
							que ofereça monitoramento adequado e prover edução de primeiro mundo para aquele que 
							ele ama de paixão.

							E nós da DOGG.PET conectamos os mundos.						
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
						<div class="amenities-img animate-box" style="background-image: url(images/room-5.jpg);"></div>
						<div class="amenities-img animate-box" style="background-image: url(images/amenities-2.jpg);">
						</div>
						<div class="desc animate-box">
							<h2><a href="#">SPA &amp; Beauty Centre</a></h2>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">59</span>
								<span class="per">/ per person</span>
							</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptates eius, nam
								laudantium, quasi laborum cumque asperiores totam est perferendis itaque id esse quidem
								recusandae sequi aut? Ratione, enim, consequatur!</p>
						</div>
						<div class="desc animate-box">
							<h2><a href="#">Conference Hall for Business Events</a></h2>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">359</span>
								<span class="per">/ per night / room</span>
							</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi voluptates eius, nam
								laudantium, quasi laborum cumque asperiores totam est perferendis itaque id esse quidem
								recusandae sequi aut? Ratione, enim, consequatur!</p>
						</div>
						<div class="amenities-img animate-box" style="background-image: url(images/amenities-3.jpg);">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i
								class="icon-star-full"></i><i class="icon-star-full"></i><i
								class="icon-star-full"></i></span>
						<h2>Sign Up for a Newsletter</h2>
						<p>Get A 50% Discounts in every Rooms, Book now!</p>
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