<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		echo '<script type="text/javascript">'; 
    echo 'alert("Effettuare il login prima di procedere alla prenotazione.");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
	}
?>

<!DOCTYPE html>
<head>
	<title>E-Cinema - Prenotazioni</title>
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/faqstyle.css" type="text/css" media="all" />
	<link href="css/medile.css" rel='stylesheet' type='text/css' />
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/contactstyle.css" type="text/css" media="all" />
	<link rel="stylesheet" href="news-css/news.css" type="text/css" media="all" />
	<link rel="stylesheet" href="list-css/list.css" type="text/css" media="all" />	<!--LISTA-->
	<link rel="stylesheet" href="css/font-awesome.min.css" /> <!--FONT-->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> <!--JAVASCRIPT-->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<!-- SCRIPT PULSANTE TOP SCROLL -->
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
	<!-- //SCRIPT PULSANTE TOP SCROLL -->
</head>
	
<body>
<!-- TESTA -->
	<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><h1>E-CINEMA</h1></a>
			</div>
			
			<div class="sign_in_register">
				<ul>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //TESTA -->
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
							<li class="home_act"><a href="index.php">Home</a></li>
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
							<li class="active"><a href="prenotazioneHTML.php">Prenotazioni</a></li>
							<li><a href="utente.php">Area Riservata</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //BARRA MENU -->
<!-- faq-banner -->
	<div class="faq">
		<div class="container">
				<div class="wthree-related-news-left">
					<div class="wthree-news-top-left">
						<div class= "form">
							<form action="prenotazione.php" method="post">
								<ul id="form_pren">
									<li>
										<fieldset>
										<legend> Scegli il Cinema </legend>
											<select name="Cinema">
												<option>Napoli</option>
												<option>Bagdad</option>
												<option>Acerra</option>
												<option>Liveri</option>
										</fieldset>
									</li>		
									<li>
										<fieldset>
										<legend> Scegli il Film </legend>      <!--Nel fieldset dei film dovremmo far comparire i film effettivamente in programmazione tramite una query-->
											<select name="Film">
												<option>The Wolf of Wall Street</option>
												<option>Minions</option>
												<option>Ecceziunale Veramente</option>
												<option>Rogue One: A Star Wars Story</option>
												<option>Biancaneve sotto i nani</option>
										</fieldset>
									</li>
									$data=(date("d-m-y"));
									<li>
										<label> Scegli la Data <input type="date" name="datafilm" min="$data"></label>  <!-- //Impedisce l'iserimento di un data precedente a quella della visita-->
									</li>
									<li>
										<fieldset>                                <!--//Anche gli orari dovranno essere quelli realmente disponibili in programmazione -->
										<legend> Scegli orario </legend>
											<select name="ora">
												<option> 18.30 </option>
												<option> 21.30 </option>
										</fieldset>
									</li> 
									<li><button type="submit" value="conferma"></li>					
								</ul>
							</form>				
					    </div>
					</div>		         
				</div>
		</div>
	</div>
<!-- //faq-banner -->
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
<!-- Bootstrap Core JavaScript -->
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
<!-- //Bootstrap Core JavaScript -->
<!-- PULSANTE TOP SCROLL -->
	<script type="text/javascript">
		$(document).ready(function() {					
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //PULSANTE TOP SCROLL -->
</body>
</html>