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
				   					<h2>FAQ</h2>
				   					<h1>Qual sua dúvida?</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

<div class="container">
<h1>FAQ´s</h1>
        <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Como faço para solicitar e confirmar uma reserva no site?        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
    <p>Para fazer sua reserva pelo site, basta acessar o perfil do Hotel desejado e clicar no botão “Reservas”. Pelos aplicativos é o mesmo caminho: indo até o perfil do Anfitrião e clicando no botão "Reservar". Pelo site você também pode clicar no botão “Reservar” dentro da conversa que você já tem com o Anfitrião.

Você vai precisar cadastrar os dados do seu animalzinho e colocar as datas de início e fim da hospedagem (check in e check out), além de preencher alguns dados pessoais e escolher o método de pagamento. Depois de mandar a solicitação e o Anfitrião aceitá-la, será necessário que o pagamento seja feito e localizado pelo nosso sistema financeiro para que o status da reserva passe a ser CONFIRMADO e a hospedagem esteja pronta para começar. 

Para pagamentos por boleto, o Cliente deve enviar o comprovante de pagamento para contato@doghero.com.br para que nossa Equipe dê baixa no sistema e o status altere para CONFIRMADO.

Quando o pagamento é por cartão de crédito, o débito é feito na hora que o Anfitrião aceita. É importante ressaltar que seu cachorrinho só estará assegurado pelo nosso suporte e Garantia Veterinária se o status da reserva estiver como CONFIRMADO.
</p>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        O sistema de pagamento da DogHero é seguro?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <p>Nós investimos muito em segurança e o ambiente da DOGG é 100% seguro!

Utilizamos em nosso site mecanismo https. Isso significa que nenhuma informação passada por um usuário em nosso site possa ser acessada por outro local a não ser nossos servidores.

Nós não armazenamos nenhuma informação do seu cartão de crédito em nosso sistema. A DogHero usa uma intermediadora de pagamento chamada Iugu. Toda vez que os dados de um cartão de crédito é inserido em  nossa plataforma, os dados vão direto para a Iugu. Eles então nos mandam uma chave única de autorização, para que possamos realizar a cobrança.

A Iugu segue o protocolo Internacional PCI de segurança. O PCI (Payment Card Industry) é um conselho (Security Standards Council) formado pelas empresas American Express, Discover Financial Services, JCB International, MasterCard e Visa. Elas estabeleceram  regras e normas que garantem a segurança durante o manuseio dos dados de cartões de crédito em transações eletrônicas.

Além disso, pelo ambiente da DogHero ser 100% seguro, nós não sofremos nenhuma tentativa de acesso (invasão hacker) aos dados armazenados em nosso sistema, e numa hipótese remota disso ocorrer, os dados dos cartões não são armazenados por nós. Somente pela Iugu e de forma 100% segura, através dos mecanismos citados acima.

Caso você tenha tido qualquer problema com seu cartão de crédito, o ideal nesse caso é que você tome as providências diretamente com a administradora do seu cartão de crédito, pois isso pode ter ocorrido em outro estabelecimento (virtual ou físico).</p>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Como posso solicitar um cancelamento?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        <p>A primeira coisa a fazer é entrar em contato com o Hotel/Creche, informando sobre o cancelamento.

Em seguida, envie uma solicitação ou ligue para (11) 3355-2233 para comunicar a nossa Equipe de Suporte. Iremos proceder com o cancelamento e com o estorno, se houver.

Para garantir o estorno o cancelamento deverá ser feito até o último dia da hospedagem.

Para ficar mais claro, fizemos um vídeo que explica melhor como agir nessas situações e como funciona o cancelamento. Assista aqui!</p>
      </div>
    </div>
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

