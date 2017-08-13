<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Fundacion Aluna</title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans|Raleway" rel="stylesheet"/>
	<link href="{{ asset('css/login/css/flexslider.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('css/login/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('css/login/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('css/login/css/style.css') }}" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'/>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'/>
	
</head>
<body id="top" data-spy="scroll">
	<!--top header--> 

	<header id="home">
		<!--
		<section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top-left">
							
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
							
						</div>
					</div>

					<div class="col-md-6">
						<div class="top-right">
							<p>Location:<span>Main Street 2020, City 3000</span></p>
						</div>
					</div>

				</div>
			</div>
		</section>
		-->
		<!--main-nav-->

		<div id="main-nav">
			<nav class="navbar">
				<div class="container">
					<div class="navbar-header">
						<img src="{{URL::asset('/css/login/images/logoaluna.gif')}}" alt=""/>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
								<span class="sr-only">Toggle</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-right">
							
							 @if (Route::has('login'))
								<div class="top-right links">
									@if (Auth::check())
										<a href="{{ url('/home') }}">Home</a>
									@else
										<a href="#"class="btn btn-danger" > <b class="color-blue">PROYECTO</b></a>
										<a href="{{ url('/login') }}"class="btn btn-info " ><i class="fa fa-cogs"></i> <b class="color-blue">PQRS</b></a>
										<a href="{{ url('/register') }}"class="btn btn-default " ><i class="fa fa-cogs"></i> <b class="color-blue">registrar</b></a>
									@endif
								</div>
							@endif
							
					
						</ul>
					</div>

					<div class="search-form">
	                    <form>
	                        <input type="text" id="s" size="40" placeholder="Search..." />
	                    </form>
	                </div>

				</div>
			</nav>
		</div>
	</header>

	<!--slider-->
	<div id="slider" class="flexslider">
        <ul class="slides">
            <li>
            	<img src="{{URL::asset('/css/login/images/slider/slider2.jpg')}}"/>
				<div class="caption"><br>
					<h2><span>APLICATIVOS WEB</span></h2>
					<h1><span>CENTRO DE HABILITACION Y CAPACITACION  ALUNA</span></h1>   
	            </div>
            </li>
        </ul>
    </div>

   

		<!--contact--><!--
		<div id="contact">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
						<div class="contact-heading">
							<h2>contact</h2> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent metus magna,malesuada porta elementum vitae.</p>
						</div>
					</div>
				</div>   	
	    	</div>

	    	<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
            
		</div>


		<!--client-->
		<div id="client">
			<h3>Universidad Tecnologica de Bolivar - Faculta de Ingenierias</h3>
			<h3>Programa de Igenieria de Sistemas</h3><br/>
			<div class="container">
				<div class="row">

					<div class="col-sm-6 col-md-3">
						<span></span><img src="./css/login/images/client/logoutb1.png" alt="">
					</div>

					<div class="col-sm-6 col-md-3">
						<span></span><img src="./css/login/images/client/logoutb2.png" alt="">
					</div>

					<div class="col-sm-6 col-md-3">
						<span></span><img src="./css/login/images/client/logoutb3.jpg" alt="">
					</div>
					<div class="col-sm-6 col-md-3">
						<span></span><img src="./css/login/images/client/logoutb4.jpg" alt="">
					</div>
					

				</div>
			</div>
		</div>
		<!--
		<!--footer
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-heading">
							<h3><span>about</span> us</h3>
							<p>To explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before. It's time to play the music.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="footer-heading">
							<h3><span>latest</span> news</h3>
							<ul>
								<li><a href="#">Trends don't matter, but techniques do</a></li>
								<li><a href="#">Trends don't matter, but techniques do</a></li>
								<li><a href="#">Trends don't matter, but techniques do</a></li>
								<li><a href="#">Trends don't matter, but techniques do</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="footer-heading">
							<h3><span>follow</span> us on instagram</h3>
							<div class="insta">
								<ul>
									<img src="images/footer/footer1.jpg" alt="">
									<img src="images/footer/footer2.jpg" alt="">
									<img src="images/footer/footer3.jpg" alt="">
									<img src="images/footer/footer4.jpg" alt="">
									<img src="images/footer/footer5.jpg" alt="">
									<img src="images/footer/footer6.jpg" alt="">
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!--bottom footer
		<div id="bottom-footer" class="hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="footer-left">
							&copy; MyBix Theme. All rights reserved
                            <div class="credits">
                                <!-- 
                                    All the links in the footer should remain intact. 
                                    You can delete the links only if you purchased the pro version.
                                    Licensing information: https://bootstrapmade.com/license/
                                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyBiz
                                
                            </div>
						</div>
					</div>

					<div class="col-md-8">
						<div class="footer-right"><!-- 
                            <ul class="list-unstyled list-inline pull-right">
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#service">Service</a></li>
                                <li><a href="#portfolo">Portfolio</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul> 
						</div>
					</div>
				</div>
			</div>
		</div>
       --> 

	
	<!-- jQuery -->
	<script src="{{ URL::asset('css/login/js/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('css/login/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('css/login/js/jquery.flexslider.js') }}"></script>
	<script src="{{ URL::asset('css/login/js/jquery.inview.js') }}"></script>
	<script src="{{ URL::asset('css/login/js/script.js') }}"></script>
	<script src="{{ URL::asset('css/login/js/contactform.js') }}"></script>
</body>
</html>