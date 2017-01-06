<!--
author: Carmine Cesarano, Michele De Sena, Vincenza D'Angelo
-->

<?php
session_start();
?>

<!DOCTYPE html>
<head>
	<title>E-Cinema - FILM</title>

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
	<link href="css/faqstyle.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<link href="css/medile.css" rel='stylesheet' type='text/css' />
	<link href="news-css/news.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="list-css/list.css" type="text/css" media="all" /> <!-- LISTA -->
	<link rel="stylesheet" href="css/font-awesome.min.css" /> <!-- FONT -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script> <!-- JAVASCRIPT -->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<!-- SCRIPT SCROLL TOP -->
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
	<!-- SCRIPT SCROLL TOP -->
	<!-- TABELLE -->
	<link rel="stylesheet" type="text/css" href="list-css/table-style.css" />
	<link rel="stylesheet" type="text/css" href="list-css/basictable.css" />
	<script type="text/javascript" src="list-js/jquery.basictable.min.js"></script>
	 <script type="text/javascript">
	    $(document).ready(function() {
	      $('#table').basictable();
	
	      $('#table-breakpoint').basictable({
	        breakpoint: 768
	      });
		   $('#table-breakpoint1').basictable({
	        breakpoint: 768
	      });
		  $('#table-breakpoint2').basictable({
	        breakpoint: 768
	      });
		  $('#table-breakpoint3').basictable({
	        breakpoint: 768
	      });
	    });
	  </script>
	<!-- //TABELLE -->
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
					<?php
						if(isset($_SESSION['username'])){
							echo '<li><a href="logout.php">Logout</a></li>';
						}else
						echo '<li><a href="#" data-toggle="modal" data-target="#myModal">Login & SignUp</a></li>';
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
								<div class="tooltip">Click Me</div>
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
		  // CAMBIA L'ICONA
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
							<li class="home_act"><a href="index.php">Home</a></li>
							<li class="active"><a href="film.php">Film</a></li>
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
<!-- LISTA -->
	<div class="faq">
		<h4 class="latest-text faq_latest_text latest_text">Lista Film</h4>
			<div class="container">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="agile-news-table">
								<table id="table-breakpoint">
									<thead>
									  <tr>
										<th>No.</th>
										<th>Nome Film</th>
										<th>Anno</th>
										<th>Definizione</th>
										<th>Paese</th>
										<th>Genere</th>
										<th>Valutazione</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>1</td>
										<td class="list-img"><a href="single.php"><img src="images/n1.jpg" alt="" /> <span>War Dogs</span></a></td>
										<td>2013</td>
										<td>HD</td>
										<td class="list-info"><a>Regno Unito</a></td>
										<td class="list-info"><a>Commedia, Dramma</a></td>
										<td>7.0</td>
									  </tr>
									  <tr>
										<td>2</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>3</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>4</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>5</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>6</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>7</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>8</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>9</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>10</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="a" aria-labelledby="a-tab">
							<div class="agile-news-table">
								<table id="table-breakpoint1">
									<thead>
									  <tr>
										<th>No.</th>
										<th>Nome Film</th>
										<th>Anno</th>
										<th>Status</th>
										<th>Paese</th>
										<th>Genere</th>
										<th>Valutazione</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>11</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>12</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>13</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>14</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>15</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>16</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>17</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>18</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>19</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>20</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									</tbody>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="b" aria-labelledby="b-tab">
							<div class="agile-news-table">
								<table id="table-breakpoint2">
									<thead>
									  <tr>
										<th>No.</th>
										<th>Nome Film</th>
										<th>Anno</th>
										<th>Status</th>
										<th>Paese</th>
										<th>Genere</th>
										<th>Valutazione</th>
									  </tr>
									</thead>
									<tbody>
									  <tr>
										<td>21</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>22</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>23</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>24</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>25</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>26</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>27</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>28</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>29</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									  <tr>
										<td>30</td>
										<td class="list-img"><a href="single.php"><img src="images/n2.jpg" alt="" /> <span>...</span></a></td>
										<td>...</td>
										<td>HD</td>
										<td class="list-info"><a>...</a></td>
										<td class="list-info"><a>...</a></td>
										<td>0.0</td>
									  </tr>
									</tbody>
								</table>
							</div>
						</div>
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">1</a></li>
							<li role="presentation"><a href="#a" role="tab" id="a-tab" data-toggle="tab" aria-controls="a">2</a></li>
							<li role="presentation"><a href="#b" role="tab" id="b-tab" data-toggle="tab" aria-controls="b">3</a></li>
						</ul>	
					</div>
				</div>
			</div>
	</div>
<!-- //LISTA -->
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
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //PULSANTE TOP SCROLL -->
</body>
</html>