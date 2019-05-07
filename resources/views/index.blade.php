<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
@include('layouts.header')
        <!-- slides -->
            <aside id="colorlib-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <li style="background-image: url(images/dogview.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Bem vindo a DOGG</h2>
                                        <h1>DOGG</h1>
                                        <p>
                                            <a class="btn btn-primary btn-demo"  href="#ex1" rel="modal:open"></i>Detalhes</a> <a class="btn btn-primary btn-learn" href="#ex2" rel="modal:open">Saiba mais</a></p>
                                            <div id="ex1" class="modal">
                                            <p>Seu portal de hotelaria e creche para seu PET!</p>
                                            <a href="#" rel="modal:close">Close</a>
                                            </div>
                                            <div id="ex2" class="modal">
                                            <p>O melhor serviço de hotelaria para PET´s do país!</p>
                                            <a href="#" rel="modal:close">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>        
                    
                    <li id="bgp-100" style="background-image: url(images/family2.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2> BLA BLA &amp; BLA BLA</h2>
                                        <h1>Tudo que seu PET precisa</h1>
                                        <p>
                                            <a class="btn btn-primary btn-demo" href="#ex1" rel="modal:open"></i> Detalhes</a> <a class="btn btn-primary btn-learn" href="#ex2" rel="modal:open">Saiba mais</a></p>
                                        <!-- Modal HTML embedded directly into document -->
                                            <div id="ex1" class="modal">
                                            <p>Serviço Vet <br>
                                                TáxiDog <br>
                                                Câmera 24 hrs</p>
                                            <a href="#" rel="modal:close">Close</a>
                                            </div>
                                            <div id="ex1" class="modal">
                                            <p>Toda a atenção e carinho que seu PET merece!</p>
                                            <a href="#" rel="modal:close">Close</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <li id="bgp-100" style="background-image: url(images/dog1.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluids">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>O maior portal de hotéis e passeios</h2>
                                        <h1>Nós sabemos como cuidar de quem que você ama</h1>
                                        <p>
                                            <a class="btn btn-primary btn-demo" href="#"></i> Detalhes</a> <a class="btn btn-primary btn-learn">Saiba mais</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li id="bgp-100" style="background-image: url(images/dogsecurity.jpg);">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
                                    <div class="slider-text-inner text-center">
                                        <h2>Viaje &amp; Aproveite suas férias</h2>
                                        <h1>Seu PET em total segurança</h1>
                                        <p>
                                            <a class="btn btn-primary btn-demo" href="#"></i> Detalhes</a> <a class="btn btn-primary btn-learn">Saiba mais</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- reservation -->
        <div id="colorlib-reservation">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 search-wrap">
                        <form method="post" class="colorlib-form">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Check-in:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Data do check-in">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="date">Check-out:</label>
                                        <div class="form-field">
                                            <i class="icon icon-calendar2"></i>
                                            <input type="text" id="date" class="form-control date" placeholder="Data do check-out">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="caes">Cães</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                                <option value="#">1</option>
                                                <option value="#">2</option>
                                                <option value="#">3</option>
                                                <option value="#">4</option>
                                                <option value="#">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="gatos">Gatos</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="people" id="people" class="form-control">
                                                <option value="#">1</option>
                                                <option value="#">2</option>
                                                <option value="#">3</option>
                                                <option value="#">4</option>
                                                <option value="#">5+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <input type="submit" name="submit" id="submit" value="Procurar" class="btn btn-primary btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- services -->
        <div id="colorlib-services">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-reception"></i>
                            </span>
                            <h3>Atendimento 24rs</h3>
                            <p>Atendimento 24 horas, todos os dias da semana! </p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-herbs"></i>
                            </span>
                            <h3>Serviço de Transfer</h3>
                            <p>Não se preocupe em levar os buscar, fazemos isso por você!</p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-car"></i>
                            </span>
                            <h3>Seguro Saúde</h3>
                            <p>Segurança total, e atendimento vet para seu PET!</p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-3 animate-box text-center">
                        <div class="services">
                            <span class="icon">
                                <i class="flaticon-cheers"></i>
                            </span>
                            <h3>Creche</h3>
                            <p>Conheça a Creche para seu PET. Programa de adestramento e atenção total enquanto você trabalha!</p>
                            <p></p>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- rooms -->
        <div id="colorlib-rooms" class="colorlib-light-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                        <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                        <h2>Conforto &amp; Lazer</h2>
                        <p>Total conforto e lazer para seu PET. Atenção que eles merecem!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="owl-carousel owl-carousel2">
                            <div class="item">
                                <a href="images/dog-room.jpg" class="room image-popup-link" style="background-image: url(images/dog-room.jpg);"></a>
                                <div class="desc text-center">
                                    <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star- full"></i><i class="icon-star-full full"></i></span>
                                    <h3><a href="rooms-suites.html">Suite DOGG</a></h3>
                                    <p class="price">
                                        <span class="currency">R$</span>
                                        <span class="price-room">79</span>
                                        <span class="per">/ Por noite</span>
                                    </p>
                                    <ul>
                                        <li><i class="icon-check"></i> Apenas 10 unidades</li>
                                        <li><i class="icon-check"></i> All inclusive (Comidinhas já no valor)</li>
                                        <li><i class="icon-check"></i> Transfer &amp; Banho a cada 10 dias</li>
                                    </ul>
                                    <p><a class="btn btn-primary btn-book">Reserve agora!</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <a href="images/dog-room-2.jpg" class="room image-popup-link" style="background-image: url(images/dog-room-2.jpg);"></a>
                                <div class="desc text-center">
                                    <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                                    <h3><a href="rooms-suites.html">Hostel DOGG</a></h3>
                                    <p class="price">
                                        <span class="currency">R$</span>
                                        <span class="price-room">39</span>
                                        <span class="per">/ Por noite</span>
                                    </p>
                                    <ul>
                                        <li><i class="icon-check"></i> No máximo 8 PETS</li>
                                        <li><i class="icon-check"></i> Espaçoso e ventilado</li>
                                        <li><i class="icon-check"></i> Camera 24 horas &amp; Banho a cada 10 dias</li>
                                    </ul>
                                    <p><a class="btn btn-primary btn-book">Reserve agora!</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <a href="images/dog-room-3.jpg" class="room image-popup-link" style="background-image: url(images/dog-room-3.jpg);"></a>
                                <div class="desc text-center">
                                    <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                                    <h3><a href="rooms-suites.html">Família DOGG</a></h3>
                                    <p class="price">
                                        <span class="currency">R$</span>
                                        <span class="price-room">99</span>
                                        <span class="per">/ Por noite</span>
                                    </p>    
                                    <ul>
                                        <li><i class="icon-check"></i> 2 Camas</li>
                                        <li><i class="icon-check"></i> Comporta até 3 pets*</li>
                                        <li><i class="icon-check"></i> Seus PETS não se separam</li>
                                    </ul>
                                    <p><a class="btn btn-primary btn-book">Reserve agora!</a></p>
                                </div>
                            </div>
                            <div class="item">
                                <a href="images/dogyoda.jpg" class="room image-popup-link" style="background-image: url(images/dogyoda.jpg);"></a>
                                <div class="desc text-center">
                                    <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                                    <h3><a href="rooms-suites.html">Hotel Paulista</a></h3>
                                    <p class="price">
                                        <span class="currency">R$</span>
                                        <span class="price-room">49</span>
                                        <span class="per">/ Por noite</span>
                                    </p>
                                    <ul>
                                        <li><i class="icon-check"></i> Quarto espaçoso para 8 PETS</li>
                                        <li><i class="icon-check"></i> Espaço verde 16 horas por dia</li>
                                        <li><i class="icon-check"></i> Camera 24 horas &amp; Transfer</li>
                                    </ul>
                                    <p><a class="btn btn-primary btn-book">Reserve agora!</a></p>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="col-md-12 text-center animate-box">
                        <a href="#">View all rooms <i class="icon-arrow-right3"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!--
		<div id="colorlib-dining-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Adestramento &amp; Lorem Ipsum</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis nihil optio qui aut vero doloremque laboriosam sunt recusandae beatae amet libero dolores alias eum et, eius culpa fugit. Impedit, aut!</p>
					</div>
				</div>
				<div class="row">
					<div class="diningbar-flex">
						<div class="half animate-box">
							<ul class="nav nav-tabs text-center" role="tablist">
								<li role="presentation" class="active"><a href="#mains" aria-controls="mains" role="tab" data-toggle="tab">Mains</a></li>
								<li role="presentation"><a href="#desserts" aria-controls="desserts" role="tab" data-toggle="tab">Desserts</a></li>
								<li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">Drinks</a></li>
							</ul> -->


        <!-- Tab panes -->

        <!--
			            <div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="mains">
									<div class="row">
										<div class="col-md-12">
											<ul class="menu-dish">
							              <li>
							                <figure class="image"><img src="images/menu-1.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$25.99</span>
							                  <h3>Grilled Pork</h3>
							                  <p class="cat">Meat / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-2.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$30.99</span>
							                  <h3>Tuna Roast Source</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$40.00</span>
							                  <h3>Roast Beef (4 sticks)</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Salted Fried Chicken</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="desserts">
									<div class="row">
										<div class="col-md-12">
											<ul class="menu-dish">
							              <li>
							                <figure class="image"><img src="images/menu-1.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$39.90</span>
							                  <h3>Fried Potatoes with Garlic</h3>
							                  <p class="cat">Viggies / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$20.99</span>
							                  <h3>Tuna Roast Source</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$50.00</span>
							                  <h3>Roast Beef (4 sticks)</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$29.00</span>
							                  <h3>Salted Fried Chicken</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="drinks">
									<div class="row">
										<div class="col-md-12">
											<ul class="menu-dish">
							              <li>
							                <figure class="image"><img src="images/menu-8.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$25.00</span>
							                  <h3>Fried Potatoes with Garlic</h3>
							                  <p class="cat">Viggies / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-9.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$20.50</span>
							                  <h3>Tuna Roast Source</h3>
							                  <p class="cat">Tuna / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-3.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$30.00</span>
							                  <h3>Roast Beef (4 sticks)</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							              <li>
							                <figure class="image"><img src="images/menu-4.jpg" alt="Free Bootstrap Template by colorlib.com"></figure>
							                <div class="text">
							                  <span class="price">$29.99</span>
							                  <h3>Salted Fried Chicken</h3>
							                  <p class="cat">Crab / Potatoes / Rice</p>
							                </div>
							              </li>
							            </ul>
										</div>
									</div>
								</div>
			            </div>
							 </div>
							-->

        <!-- end half -->

        <!--
							 <div class="half diningbar-img" style="background-image: url(images/Adestramento.jpg);"></div>
							 -->

        <!-- end half -->

    </div>
    </div>
    </div>
    </div>

    <div id="colorlib-blog">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                    <h2>Blog DOGG</h2>
                    <p>Nosso blog com notícias e novidades para você!</p>
                </div>
            </div>
            <div class="blog-flex">
                <div class="video colorlib-video" style="background-image: url(images/dog1.jpg);">
                    <a href="https://vimeo.com/69828650" class="popup-vimeo"><i class="icon-video"></i></a>
                    <div class="overlay"></div>
                </div>
                <div class="blog-entry">
                    <div class="row">
                        <div class="col-md-12 animate-box">
                            <a href="blog.html" class="blog-post">
                                <span class="img" style="background-image: url(images/adestramento.jpg);"></span>
                                <div class="desc">
                                    <span class="date">Janeiro 24, 2019</span>
                                    <h3>Conheça nosso programa de adestramento</h3>
                                    <span class="cat">Atividades</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 animate-box">
                            <a href="blog.html" class="blog-post">
                                <span class="img" style="background-image: url(images/premio.jpg);"></span>
                                <div class="desc">
                                    <span class="date">Janeiro 24, 2019</span>
                                    <h3>Dogg ganha prêmio de melhor plataforma</h3>
                                    <span class="cat">Notícias</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 animate-box">
                            <a href="blog.html" class="blog-post">
                                <span class="img" style="background-image: url(images/dog-4.jpg);"></span>
                                <div class="desc">
                                    <span class="date">Janeiro 24, 2019</span>
                                    <h3>Pesquisa comprova que cachorro é dahora</h3>
                                    <span class="cat">Atividades</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12 animate-box text-right">
                            <a href="#">View all blog post <i class="icon-arrow-right3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony" class="colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
                    <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                    <h2>Conheça nossos clientes satisfeitos</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur fugit sequi totam exercitationem fuga perferendis voluptatibus incidunt. Ab nihil harum id fugit, sint assumenda ducimus praesentium, corrupti expedita odit dolores?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="testimony text-center">
                        <span class="img-user" style="background-image: url(images/person2.jpg);"></span>
                        <span class="user">Brian Doe</span>
                        <small>Cliente satisfeito</small>
                        <blockquote>
                            <p>
                                </i> "A DOGG foi a melhor experiência que o meu PET já teve. Eu conseguia monitorá-lo durante toda minha viagem, o que tornou as minhas férias muito mais tranquilas."</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="testimony text-center">
                        <span class="img-user" style="background-image: url(images/person1.jpg);"></span>
                        <span class="user">Nathalie Miller</span>
                        <small>Cliente satisfeito</small>
                        <blockquote>
                            <p>
                                </i> "Gostaria de parabenizar a DOGG, pela plataforma, pelas orientações constantes no site e principalmente o seguro em caso de qualquer eventualidade com a saúde do PET."</p>
                        </blockquote>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="testimony text-center">
                        <span class="img-user" style="background-image: url(images/person3.jpg);"></span>
                        <span class="user">Shara Jones</span>
                        <small>Cliente satisfeito</small>
                        <blockquote>
                            <p>
                                </i> "Quem tem PET, pode contar com a DOGG."
                            </p>
                        </blockquote>
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
                    <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                    <h2>Cadastre-se</h2>
                    <p>Receba 50% de desconto na primeira reserva, corre lá!</p>
                    <form class="form-inline qbstp-header-subscribe">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" placeholder="Digite seu e-mail">
                                    <button type="submit" class="btn btn-primary">Increva-se</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- add footer aqui -->

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