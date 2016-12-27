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

//Recupero dati inseriti nel form sign up
$username = $_POST['username'];
$password = $_POST['password'];
$cognome = $_POST['cognome'];
$nome = $_POST['nome'];
$email = $_POST['email'];

if(strlen($username)<5){
    echo '<script type="text/javascript">'; 
    echo 'alert("Username troppo corto. Inserire almeno 5 caratteri");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
if(strlen($password)<5){
    echo '<script type="text/javascript">'; 
    echo 'alert("Password troppo corto. Inserire almeno 5 caratteri");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}
if($username==$password){
    echo '<script type="text/javascript">'; 
    echo 'alert("Password e username coincidono. Scegliere una password diversa.");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}

//Criptazione password
$passwordcript = md5('%password'); 

//Query di inserimento dati  
$sql = "INSERT INTO Amministratore.UTENTI (Username, Pwd, Cognome, Nome, Email) VALUES ('${username}', '${password}', '${cognome}', '${nome}', '${email}')";

//esecuzione della query
$stid = oci_parse($conn, $sql);
$execute = oci_execute($stid);

if($execute) {
    echo '<script type="text/javascript">'; 
    echo 'alert("Registrazione effettuata con successo.");'; 
    echo 'window.location.href = "index.php";';
    echo '</script>';
}

//chiusura della connessione
oci_close($conn);

//MESSAGGI WARNING
//$Warn1 = "Impossibile completare la registrzione. L'username inserito risulta già registrato";
//$Warn2 = "Impossibile completare la registrazione. L'email inserita risutla già registrata";
//$Warn3 = "<strong>Username</strong> o <strong>Password</strong> troppo corti. Lunghezza minima 5 caratteri";
//$Warn4 = "La password inserita deve essere diversa dall'username";
//$Warn6 = "Il nome contiene caratteri non ammessi";
//$Warn7 = "Il cognome contiene caratteri non ammessi";
//$Warn8 = "Indirizzo email non corretto";

/*Controllo valori  
if(!preg_match('/^[A-Za-z \'-]+$/i',$nome)){
    echo "$Warn6";
}
if(!preg_match('/^[A-Za-z \'-]+$/i',$cognome)){
    echo "$Warn7";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$Warn8";
}
if($username==$password){
    echo "$Warn4";
}*/
?>

