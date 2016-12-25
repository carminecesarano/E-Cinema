<?php
session_start();
?>

<!DOCTYPE html>
<html>
 <head>
	<title>E-Cinema - HOME</title>
	<?php 
	 include('header.php');
	?>
	
</head>
<body>
	<?php
	include('menu.php');
	?>

	<!-- BOTTONI BANNER -->
	<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> 
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
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	
<!-- BANNER SCORREVOLE -->
	<div id="slidey" style="display:none;">
		<ul>
			<li><img src="images/1.jpg" alt=" "><p class='title'>The Wolf of Wall Street</p><p class='description'> Jordan Belfort (Leonardo Di Caprio) di giorno riesce a guadagnare migliaia di dollari che con la stessa velocità sperpera in droga, sesso e viaggi intorno al mondo. Però negli anni Novanta il suo appetito insaziabile gettano il suo nome nel fango.</p></li>
			<li><img src="images/2.jpg" alt=" "><p class='title'>Rogue One: A Star Wars Story</p><p class='description'>Jyn Erso, a Rebellion soldier and criminal, is about to experience her biggest challenge yet when Mon Mothma sets her out on a mission to steal the plans for the Death Star. With help from the Rebels, a master swordsman, and non-allied forces, Jyn will be in for something bigger than she thinks.</p></li>
			<li><img src="images/3.jpg" alt=" "><p class='title'>...</p><p class='description'>...</p></li>
			<li><img src="images/4.jpg" alt=" "><p class='title'>...</p><p class='description'>...</p></li>
			<li><img src="images/5.jpg" alt=" "><p class='title'>...</p><p class='description'>...</p></li>
			<li><img src="images/6.jpg" alt=" "><p class='title'>...</p><p class='description'>...</p></li>
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
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m22.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
										
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m2.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg" title="album-name" class="img-responsive" alt=" " /></a>
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
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m2.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m21.jpg" title="album-name" class="img-responsive" alt=" " /></a>
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
									<p class="fexi_header">Captain America: Civil War</p>
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
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m2.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m9.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m7.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m11.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m17.jpg" title="album-name" class="img-responsive" alt=" " /></a>
										<div class="mid-1 agileits_layouts_mid_1_home">
											<div class="mid-2 agile_mid_2_home">
												<p>2016</p>
												
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<div class="col-md-2 movie-gride-agile">
										<a href="single.php" class="hvr-shutter-out-horizontal"><img src="images/m20.jpg" title="album-name" class="img-responsive" alt=" " /></a>
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
	<?php
	include('footer.php');
	?>
</body>
</html>
