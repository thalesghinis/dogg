<!DOCTYPE HTML>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	@include('layouts.head')
</head>


<body>
	@include('layouts.header')
	<div class="colorlib-loader"></div>

	<div id="page">

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/img_bg_5.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner slider-text-inner2 text-center">
										<h2>Login</h2>
										<h1>Entre na sua DoggÁrea</h1>
										<?php
											if ($_REQUEST) {
												$email = $_REQUEST['email'];
												$senha = $_REQUEST['senha'];

												// leitura do arquivo
												$usuariosJson = file_get_contents("usuarios.json");

												// transforma o json aberto em array
												$usuariosArray = json_decode($usuariosJson, true);

												// verifica se o usuário digitado existe no JSON
												$encontrou = false;

												foreach($usuariosArray["usuarios"] as $usuario):
													$senhaValida = password_verify($senha, $usuario["senha"]);

													if ($usuario["email"] === $email && $senhaValida === true) {
														$encontrou = true;
														$nome = $usuario["nome"];
													}
												endforeach;

												if ($encontrou) {
													session_start();
													
													$_SESSION["logado"] = true;
													$_SESSION["email"] = $email;
													$_SESSION["nome"] = $nome;

													header("location: areaRestrita.php");
												} else {
													$erro = "Usuário ou senha inválidos!";
												}
											}
										?>

										<?php
											if (isset($erro) && $erro) {
												echo $erro;
											}
										?>

										<form action="login.php" method="post">
											<div class="field">
												<label>E-mail:</label>
												<input type="email" name="email" placeholder="Digite seu email"
													required>
											</div>
											<div class="field">
												<label>Senha:</label>
												<input type="password" name="senha" placeholder="Digite sua senha"
													required>
											</div>
											<button type="submit">Login</button>
										</form>

									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div id="map" class="colorlib-map"></div>

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
									<div>
										<a href="">Registre-se</a>
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

	<!-- scripts -->
	<div>
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
		<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
		<script src="js/google_map.js"></script>
		<!-- Main -->
		<script src="js/main.js"></script>
	</div>

	@include('layouts.foot')
</body>

</html>