<!DOCTYPE HTML>
<html>
	<head>
	@include('layouts.head')

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
	@include('layouts.header')
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/cutecat.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner slider-text-inner2 text-center">
				   					<h2>Estamos aqui</h2>
				   					<h1>Contate-nos</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Informações do contato</h3>
						<div class="row contact-info-wrap">
							<div class="col-md-3">
								<p><span><i class="icon-location-2"></i></span> Rua dos Catioros, 123  <br> Conjunto 10, São Paulo/SP</p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-phone3"></i></span> <a href="tel://1133552255">+ 55 11 3355-2255</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-paperplane"></i></span> <a href="mailto:contato@dogg.com.br">contato@dogg.com.br</a></p>
							</div>
							<div class="col-md-3">
								<p><span><i class="icon-globe"></i></span> <a href="#">dogg.pet</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h3>Pode falar :)</h3>
						<form action="#">
							<div class="row form-group">
								<div class="col-md-6">
									<label for="fname">Nome</label>
									<input type="text" id="fname" class="form-control" placeholder="Seu primeiro nome">
								</div>
								<div class="col-md-6">
									<label for="lname">Sobrenome</label>
									<input type="text" id="lname" class="form-control" placeholder="Seu último nome">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">E-mail</label>
									<input type="text" id="email" class="form-control" placeholder="E-mail">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="subject">Assunto</label>
									<input type="text" id="subject" class="form-control" placeholder="Seu assunto">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Mensagem</label>
									<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Escreva sua mensagem"></textarea>
								</div>
							</div>
							<div class="form-group text-center">
								<input type="submit" value="Enviar" class="btn btn-primary">
							</div>

						</form>		
					</div>
				</div>
			</div>
		</div>

		<!-- <div id="map" class="colorlib-map"></div> -->
	
		<div id="colorlib-subscribe" style="background-image: url(images/dog-5.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Cadastre-se</h2>
                    <p>Receba 50% de desconto na primeira reserva, corre lá!</p>
						<form class="form-inline qbstp-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary">Subscribe</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.foot')
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
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

