<!--
author: Carmine Cesarano, Michele De Sena, Vincenza D'Angelo
-->

<?php
session_start();
?>

<!DOCTYPE html>
<head>
	<link rel="icon" src="icons/favicon.ico"/>
	<title>E-Cinema - HOME</title>
  
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" href="icons/favicon.ico" />
	
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="E-Cinema" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/contactstyle.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/faqstyle.css" rel="stylesheet"  type="text/css" media="all" />
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<link href="css/medile.css" rel='stylesheet' type='text/css' />
	
	<link href="css/jquery.slidey.min.css" rel="stylesheet"/> <!-- BANNER SCORREVOLE -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" /> <!-- POPUP LOGIN -->
	<link href="css/font-awesome.min.css" rel="stylesheet" /> <!-- FONT -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> <!-- JAVASCRIPT -->
	<!-- BOTTONI BANNER -->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"/> 
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() { 
			$("#owl-demo").owlCarousel({
			  autoPlay: 3000, //setta l'autoplay a 3 secondi
			  items : 5,
			  itemsDesktop : [640,4],
			  itemsDesktopSmall : [414,3]
			});
		}); 
	</script> 
	<!-- //BOTTONI BANNER -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'/>
	<!-- SCRIPT TOP SCROLL -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- //SCRIPT TOP SCROLL -->
</head>
	
<body>
<!-- TESTA -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php">
					<h1>E-CINEMA</h1>
				</a>
			</div>
			
			<div class="sign_in_register">
				<ul>
					<?php
						if(isset($_SESSION['username'])){
							echo '<li><a href="logout.php">Logout</a></li>';
						}else{
						echo '<li><a href="#" data-toggle="modal" data-target="#myModal">Login & Sign Up</a></li>';
						}
					?>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //TESTA -->
<!-- POPUP LOGIN -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Login & Sign Up
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">Clicca Qui</div>
							  </div>
							  <div class="form">
								<h3>Login </h3>
								<form action="login.php" method="post">
								  <input type="text" name="username_log" placeholder="Username" required="on">
								  <input type="password" name="password_log" placeholder="Password" required="on">
								  <input type="submit" value="Login">
								</form>
							  </div>
							  <div class="form">
								<h3>Registrati</h3>
								<form action="registrazione.php" method="post">
								  <input type="text" name="nome" placeholder="Nome *" required="on">
								  <input type="text" name="cognome" placeholder="Cognome *" required="on">
								  <input type="text" name="username" placeholder="Username *" required="on">
								  <input type="email" name="email" placeholder="Email *" required="on">
								  <input type="password" name="password" placeholder="Password *" required="on">
								  <input type="submit" value="Registrati">
								</form>
							  </div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // CAMBIA ICONA
		  $(this).children('i').toggleClass('fa-pencil');
		  // CAMBIA IL FORM  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //POPUP LOGIN -->
<!-- BARRA MENU -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="film.php">Film</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cinema <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-1">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="">Napoli</a></li>
												<li><a href="">Badgad</a></li>
												<li><a href="">Acerra</a></li>
												<li><a href="">Liveri</a></li>
												<li><a href="">Aleppo</a></li>
												<li><a href="">Saviano</a></li>
												<li><a href="">Albuquerque</a></li>
												<li><a href="">Ano</a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="chisiamo.php">Chi Siamo</a></li>
							<li><a href="prenotazioneHTML.php">Prenotazioni</a></li>
							<?php
								if(isset($_SESSION['username'])){
									echo '<li><a href="utente.php">Area Riservata</a></li>';
								}
							?>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //BARRA MENU -->
<!-- BANNER SCORREVOLE -->
	<div id="slidey" style="display:none;">
		<ul>
			<li><img src="images/1.jpg" alt=" "><p class='title'>The Wolf of Wall Street</p><p class='description'> Jordan Belfort (Leonardo Di Caprio) di giorno riesce a guadagnare migliaia di dollari che con la stessa velocità sperpera in droga, sesso e viaggi intorno al mondo. Però negli anni Novanta il suo appetito insaziabile gettano il suo nome nel fango.</p></li>
			<li><img src="images/2.jpg" alt=" "><p class='title'>Rogue One: A Star Wars Story</p><p class='description'>Il primo spin-off di Guerre Stellari, la trama è ambientata tra la fine di La vendetta dei Sith e l'inizio di Una nuova speranza.</p></li>
			<li><img src="images/3.jpg" alt=" "><p class='title'>Trainspotting 2</p><p class='description'>Nove anni dopo gli avvenimenti del precedessore Trainspotting, Renton, Sick Boy, Begbie e Spud, tornano sul grande schermo tracciando le loro vite non più alle prese con i problemi legati all'eroina bensì con l'idea di realizzare un business legato alla pornografia.</p></li>
			<li><img src="" alt=" "><p class='title'>...</p><p class='description'>...</p></li>
			<li><img src="" alt=" "><p class='title'>...</p><p class='description'>...</p></li>
			<li><img src="" alt=" "><p class='title'>...</p><p class='description'>...</p></li>
		</ul>   	
    </div>
    <script src="js/jquery.slidey.js"></script>
    <script src="js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //BANNER SCORREVOLE -->

<!-- BANNER2 -->
	<div class="Latest-tv-series">
		<h4 class="latest-text latest_text home_popular">Film piu' visti</h4>
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="market_video_grid1">
										<img src="images/h1-1.jpg" alt=" " class="img-responsive" />
										<a class="play_icon" href="#small-dialog">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header">The Wolf of Wall Street</p>
									<p class="fexi_header_para"><span class="conjuring">Trama<label>:</label></span> Jordan Belfort di giorno riesce a guadagnare migliaia di dollari che con la stessa velocità sperpera in droga, sesso e viaggi intorno al mondo...</p>
									<p class="fexi_header_para"><span>Data uscita<label>:</label></span> 23 Gennaio 2014 </p>
									<p class="fexi_header_para">
										<span>Genere<label>:</label> </span>
										<a>Biografico</a> | 
										<a>Commedia</a>								
									</p>
									<p class="fexi_header_para fexi_header_para1"><span>Valutazione<label>:</label></span>
										<a><i class="fa fa-star" aria-hidden="true"></i></a>
										<a><i class="fa fa-star" aria-hidden="true"></i></a>
										<a><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
										<a><i class="fa fa-star-o" aria-hidden="true"></i></a>
										<a><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids">
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
										
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="market_video_grid1">
										<img src="images/h2-1.jpg" alt=" " class="img-responsive" />
										<a class="play_icon1" href="#small-dialog1">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header">a haunting in cawdor</p>
									<p class="fexi_header_para"><span class="conjuring">Trama<label>:</label></span> Vivian Miller, sent to a rehabilitation programme for young offenders, where a theatre camp is used as an alternative to jail time. After she views tape ...</p>
									<p class="fexi_header_para"><span>Data uscita<label>:</label></span> 09 Ottobre 2015 </p>
									<p class="fexi_header_para">
										<span>Genere<label>:</label> </span>
										<a>Thriller</a> |  
										<a>Horror</a>								
									</p>
									<p class="fexi_header_para fexi_header_para1"><span>Valutazione<label>:</label></span>
										<a><i class="fa fa-star" aria-hidden="true"></i></a>
										<a><i class="fa fa-star" aria-hidden="true"></i></a>
										<a><i class="fa fa-star" aria-hidden="true"></i></a>
										<a><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
										<a><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids">
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="market_video_grid1">
										<img src="images/h3-1.jpg" alt=" " class="img-responsive" />
										<a class="play_icon2" href="#small-dialog2">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header">civil war captain America</p>
									<p class="fexi_header_para"><span class="conjuring">Trama<label>:</label></span> After the Avengers leaves some&nbsp;collateral damage, political pressure mounts to install a system of accountability.&nbsp;The new status quo deeply divides ...</p>
									<p class="fexi_header_para"><span>Data uscita<label>:</label></span> 06 Maggio 2016 </p>
									<p class="fexi_header_para">
										<span>Genere<label>:</label> </span>
										<a>Azione</a> | 
										<a>Avventura</a>								
									</p>
									<p class="fexi_header_para fexi_header_para1"><span>Valutazione<label>:</label></span>
										<a><i class="fa fa-star" aria-hidden="true"></i></a>
										<a><i class="fa fa-star" aria-hidden="true"></i></a>
										<a><i class="fa fa-star" aria-hidden="true"></i></a>
										<a><i class="fa fa-star-o" aria-hidden="true"></i></a>
										<a><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>
								</div>
								<div class="clearfix"> </div>
								<div class="agileinfo_flexislider_grids">
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
	</div>
	
	  
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script> <!-- SCRIPT BOX POPUP VIDEO -->
	
	<div id="small-dialog" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/76797802"></iframe>
	</div>
	<div id="small-dialog1" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/76797802"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.play_icon,.play_icon1,.play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<!-- //BANNER2 -->
<!-- CODA -->
	<div class="footer">
		<div class="container">
			<div class="footer_grid">
				<div class="col-md-6 footer_grid_left">
				
				</div>
				<div class="col-md-6 footer_grid_right">
					<a href="index.php"><h2>E-Cinema</h2></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 footer_grid1_left">
				<p>&copy; 2016 Tutti i diritti riservati a Cesarano Carmine, Enza D'angelo, Michele De Sena | </p>
			</div>
			<div class="col-md-7 footer_grid1_right">
				<ul>
					<li><a href="chisiamo.php">Contact Us</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //CODA -->
<!-- Bootstrap JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap JavaScript -->
<!-- PULSANTE TOP SCROLL -->
	<script type="text/javascript">
		$(document).ready(function() {				
			$().UItoTop({ easingType: 'easeOutQuart' });				
			});
	</script>
<!-- //PULSANTE TOP SCROLL -->
</body>

</html>