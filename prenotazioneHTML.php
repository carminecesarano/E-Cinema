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
	
	<link href="sceltaposti/css/style1.css" rel="stylesheet" type="text/css" media="all" />
	<script src="sceltaposti/js/jquery-1.11.0.min.js"></script>
	<script src="sceltaposti/js/jquery.seat-charts.js"></script>
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
											<legend> Effettua la prenotazione </legend>
											<div class="content">
	<div class="main">
		<div class="demo">
			<form action="prenotazione.php" method="post">
			<div id="seat-map"></div>
			<div class="booking-details">
				<ul class="book-left">
					<li>Scegli il Film: </li>
					<li>Scegli la Data: </li>
					<li>Scegli l'ora: </li>
					<li>Biglietti: </li>
					<li>Totale: </li>
					<li>Posti: </li>
				</ul>
				<ul class="book-right">
					<li>
						<fieldset>      
							<select name="Film">
								<option>Sully</option>
								<option>Animali Fantastici</option>
							</select>
						</fieldset>
					</li>
					<li>
						<fieldset>
							<input type="date" name="datafilm" min="$data">  
						</fieldset>
					</li>
					<li>
						<fieldset>                                
							<select name="ora">
								<option> 21.05 </option>
								<option> 22.05 </option>
							</select>
						</fieldset>
					</li>
					<li><span id="counter">0</span></li>
					<li><b><i>$</i><span id="total">0</span></b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>
				
				<div id="legend"></div>
			</div>
			<div style="clear:both"></div>
			</form>
	  </div>

			<script type="text/javascript">
				var price = 10; //prezzo unitario del film
				$(document).ready(function() {
					var $cart = $('#selected-seats'), //Sitting Area
					$counter = $('#counter'), //Votes
					$total = $('#total'); //Totale pagamento
					
					var sc = $('#seat-map').seatCharts({
						map: [  //Mappa poltrone
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__________',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__aaaaaa__'
						],
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return column;
							}
						},
						legend : { //Legenda
							node : $('#legend'),
							items : [
								[ 'a', 'available',   'Disponibile' ],
								[ 'a', 'unavailable', 'Venduto'],
								[ 'a', 'selected', 'Selezionato']
							]					
						},
						click: function () { //Click event
							if (this.status() == 'available') { //optional seat
								$('<li>Row'+(this.settings.row+1)+' Seat'+this.settings.label+'</li>')
									.attr('id', 'cart-item-'+this.settings.id)
									.data('seatId', this.settings.id)
									.appendTo($cart);

								$counter.text(sc.find('selected').length+1);
								$total.text(recalculateTotal(sc)+price);
											
								return 'selected';
							} else if (this.status() == 'selected') { //Checked
									//Update Number
									$counter.text(sc.find('selected').length-1);
									//update totalnum
									$total.text(recalculateTotal(sc)-price);
										
									//Delete reservation
									$('#cart-item-'+this.settings.id).remove();
									//optional
									return 'available';
							} else if (this.status() == 'unavailable') { //sold
								return 'unavailable';
							} else {
								return this.style();
							}
						}
					});
					//sold seat
					sc.get(['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2']).status('unavailable');
						
				});
				//sum total money
				function recalculateTotal(sc) {
					var total = 0;
					sc.find('selected').each(function () {
						total += price;
					});
							
					return total;
				}
			</script>
	</div>
	
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
										</fieldset>
									</li>
									<li><input type="submit" class="checkout-button" value="Prenota Ora"></li>
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