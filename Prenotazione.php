<?php
session_start();
?>
<!DOCTYPE html>
<html>
  
<head>
  <title> E-CINEMA PRENOTAZIONI</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
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
</head>
<body>
  
<?php
if (!isset($_SESSION(['username'])){                                    //Se non è attiva nessuna sessione chiede il login o SignUp
  echo'<h2> Per prenotare devi essere loggato</h2>';
  echo'<div class="form">
								<h3>Login </h3>
								<form action="login.php" method="post">
								  <input type="text" name="username_log" placeholder="Username" required="on">
								  <input type="password" name="password_log" placeholder="Password" required="on">
								  <input type="submit" value="Login">
								</form>
			 </div>';
  echo'</br>';
							  
  echo 'Non sei iscritto? Registrati ora!';
  echo'<div class="form">
          <h3> Iscriviti </h3>
          <form action="registrazione.php" method="post">
          <input type="text" name="nome" placeholder="Nome*" required="on">
          <input type="text" name="cognome" placeholder="Cognome*" required="on">
          <input type="email" name="email" placeholder="Indirizzo Email*" required="on">
          <input type="password" name="password" placeholder="Password*" required="on">
          ';
} else {                                                    
    
    echo '<div class= "form">';
    echo '<form action="prenotazione.php" method="post">;'
    echo  '<ul id="form_pren">';
             
    echo  '<li><fieldset>';
    echo  '<legend> Scegli il Cinema </legend>';
    echo   '<select name="Cinema">';
    echo    '<option>Napoli</option>';
    echo    '<option>Bagdad</option>';
    echo    '<option>Acerra</option>';
    echo    '<option>Liveri</option>';
    echo    '</fieldset></li>';
            
    echo    '<li><fieldset>';
    echo    '<legend> Scegli il Film </legend>';      //Nel fieldset dei film dovremmo far comparire i film effettivamente in programmazione tramite una query
    echo    '<select name="Film">';
    echo    '<option>The Wolf of Wall Street</option>';
    echo    '<option>Minions</option>';
    echo    '<option>Ecceziunale Veramente</option>';
    echo    '<option>Rogue One: A Star Wars Story</option>';
    echo    '<option>Biancaneve sotto i nani</option>';
    echo    '</fieldset></li>';
    $data=(date("d-m-y"));
    echo    ' <li> <label> Scegli la Data';
    echo    '<input type="date" name="datafilm" min="$data">'; //Impedisce l'iserimento di un data precedente a quella della visita
    echo    '</label> </li>';
    echo    '<li> <fieldset>';                                //Anche gli orari dovranno essere quelli realmente disponibili in programmazione 
    echo    '<legend> Scegli orario </legend>';
    echo    '<select name="ora">';
    echo    '<option> 18.30</option>';
    echo    '<option> 21.30 </option>';
    echo    '</li> </fieldset>';
    echo    '<li><button type="submit" value="conferma"></li>';
            
    echo    '</ul>';
    echo    '</form>';
            
  
  
}

?>
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
				<p>&copy; 2016 Tutti i diritti riservati a Cesarano Carmine, Vincenza D'angelo, Michele De Sena | </p>
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
  </body>
</html>