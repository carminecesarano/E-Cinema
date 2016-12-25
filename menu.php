<html>
	

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

</html>