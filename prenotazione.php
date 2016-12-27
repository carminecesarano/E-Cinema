<?php
session_start();
// Dati di connessione al db Oracle
$db_user='WEB_APP';
$db_password="web_app";
$db_host="localhost/XE";

//Connessione a Oracle
$conn=oci_connect($db_user,$db_password,$db_host);

//Verifica su errori di connessione 
if(!$conn){
    $error = oci_error();
    trigger_error(htmlentities($error['message'], ENT_QUOTES), E_USER_ERROR);
    exit();
}

// Recupero dati dal form
$cinema = $_POST["Cinema"];
$film = $_POST["Film"];
$datafilm = $_POST["datafilm"];
$orario = $_POST["ora"];
$nomeutente = $_SESSION['username'];

/*//Con lo script js scegliamo sala, fila e posto sulla mappa
$sala= $_POST["sala"];
$fila= $_POST["fila"];
$posto= $_POST["posto"];*/

//Query ricerca codice film
$sql1 = "SELECT CODFILM FROM Amministratore.Film_Programmazione where titolo = '$film'";
$stid1 = oci_parse($conn, $sql1);
oci_execute($stid1);
while (oci_fetch($stid1)) {
    $codfilm = oci_result($stid1, 'CODFILM');
}

//Query ricerca codice utente
$sql2 = "SELECT CODUTENTE FROM Amministratore.Utenti WHERE username = '$nomeutente'";
$stid2 = oci_parse($conn, $sql2);
oci_execute($stid2);
while (oci_fetch($stid2)) {
    $codutente = oci_result($stid2, 'CODUTENTE');
}

//Query ricerca codice cinema
$sql3 = "SELECT CODCINEMA FROM Amministratore.Cinema WHERE nome = '$cinema'";
$stid3 = oci_parse($conn, $sql3);
oci_execute($stid3);
while (oci_fetch($stid3)) {
    $codcinema = oci_result($stid3, 'CODCINEMA');
}
echo $datafilm;

//Query ricerca codice programma
$sql4 = "SELECT CODPROGRAMMA FROM Amministratore.CALENDARI WHERE ora = '$orario' AND data = '$datafilm' AND film = '$codfilm' AND cinema = '$codcinema'";
$stid4 = oci_parse($conn, $sql4);
oci_execute($stid4);
while (oci_fetch($stid4)) {
    $codprogramma = oci_result($stid4, 'CODPROGRAMMA');
}
/*

$datapren= (date("d-m-y");


/*$query= "INSERT INTO Amministratore.PRENOTAZIONI (utente, programma, pagato, dataprenotazione) values ('$codutente', '$codprogramma', "Y", '$datapren' )";

//Esecuzione della query
$stid=oci_parse($conn,$query);
oci_execute($stid);

//chiusura sessione 
oci_close($conn);
*/
?>

