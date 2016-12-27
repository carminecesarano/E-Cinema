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
$datapren=(date("Y-m-d"));

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

//Query ricerca codice programma
$sql4 = "SELECT CODPROGRAMMA FROM Amministratore.CALENDARI WHERE ora = TO_NUMBER('$orario', '99.99') AND film = '$codfilm' AND cinema = '$codcinema' AND data = TO_DATE('$datafilm','YYYY-MM-DD')";
$stid4 = oci_parse($conn, $sql4);
oci_execute($stid4);
while (oci_fetch($stid4)) {
    $codprogramma = oci_result($stid4, 'CODPROGRAMMA');
}

//Query insert prenotazione
$sql5= "INSERT INTO Amministratore.PRENOTAZIONI (utente, programma, pagato, dataprenotazione) values ('$codutente', '$codprogramma', 'Y', TO_DATE('$datapren','YYYY-MM-DD'))";
$stid5 = oci_parse($conn, $sql5);
oci_execute($stid5);
echo "Prenotazione effettuata :)";

//chiusura sessione 
oci_close($conn);

?>

