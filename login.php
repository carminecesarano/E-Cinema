<?php
//Dati di connessione al database Oracle
$db_user = 'WEB_APP';
$db_password = 'web_app';
$db_host = 'localhost/XE';

//Connessione al DB
$conn = oci_connect($db_user, $db_password, $db_host);

//verifica su eventuali errori di connessione
if(!$conn){
    $error = oci_error();
    trigger_error(htmlentities($error['message'], ENT_QUOTES), E_USER_ERROR);
    exit();
}

session_start();

//Recupero dati inseriti nel form login
$username_log = $_POST['username_log'];
$password_log = $_POST['password_log'];

//Anti Oracle Injection
$username_log = stripslashes($username_log);
$password_log = stripslashes($password_log);

//Query ricerca utente
$sql = "SELECT* from Amministratore.UTENTI WHERE username = '$username_log' AND pwd = '$password_log'";

//esecuzione della query
$stid = oci_parse($conn, $sql);
oci_execute($stid);

//se matcha nel database un utente con le credenziali inserite apre una sessione
if(oci_fetch($stid)==1){
    $_SESSION["username"] = oci_result($stid, 'USERNAME');
    $_SESSION["password"] = oci_result($stid, 'PASSWORD');
    $_SESSION["nome"] = oci_result($stid, 'NOME');
    $_SESSION["cognome"] = oci_result($stid, 'COGNOME');
    header("location:utente.php");
}
else{
    echo '<script type="text/javascript">'; 
    echo 'alert("Username o password errati.");'; 
    echo 'window.location.href = "index.html";';
    echo '</script>';
}

//libera tutte le risorse associate allo statement $stid
oci_free_statement($stid);
//chiusura della connessione
oci_close($conn);
?>




