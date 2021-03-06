<nav class="colorlib-nav" role="navigation">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <p class="site">www.dogg.pet</p>
                    </div>
                    <div class="col-xs-8 text-right">
                        <p class="num">Telefone: +55-11-5444-1234</p>
                        <ul class="colorlib-social">
                            <li><a href="http://www.twitter.com"><i class="icon-twitter"></i></a></li>
                            <li><a href="http://www.facebook.com"><i class="icon-facebook"></i></a></li>
                            <li><a href="http://www.instagram.com"><i class="icon-instagram"></i></a></li>
                            <li><a href="http://www.youtube.com"><i class="icon-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="{{ url('/') }}">
                        <img src="images/afdogg.jpg" alt=""></a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="{{ url('/') }}">Home</a></li>
                            <li class="has-dropdown">
                                <a href="/rooms-suites">Seja um DOGG.pet</a>
                                <ul class="dropdown">
                                        <li><a href="{{ url('/quemsomos') }}">Quem somos</a></li>
                                   <!-- <li><a href="#">Porque ser um DOGG.pet</a></li> -->
                                    <li><a href="{{ url('/conheca') }}">Conheça a DOGG.pet</a></li>
                                    <li><a href="{{ url('/contact') }}">Contato</a></li>
                                    <li><a href="{{ url('/faq') }}">FAQ</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('/hoteis') }}">Hotéis &amp; Creches</a></li>
                            <!-- <li><a href="{{ url('/blog') }}">(A)</a></li> -->
                            <!-- <li><a href="about.html">Instagram</a></li> -->
                            <!-- <li><a href="{{ url('/contact') }}">Contato</a></li> -->
                            @guest
                                <li><a href="{{ url('/login') }}">Login</a></li>
                            @else
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>