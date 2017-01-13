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
$sql4 = "SELECT CODPROGRAMMA FROM Amministratore.CALENDARI WHERE ora = '$orario' AND film = '$codfilm' AND cinema = '$codcinema' AND data = TO_DATE('$datafilm', 'YYYY-MM-DD')";
$stid4 = oci_parse($conn, $sql4);
oci_execute($stid4);
while (oci_fetch($stid4)) {
    $codprogramma = oci_result($stid4, 'CODPROGRAMMA');
}

//Query INSERT PRENOTAZIONE
$sql5= "INSERT INTO Amministratore.PRENOTAZIONI (utente, programma, pagato, dataprenotazione) values ('$codutente', '$codprogramma', 'Y', TO_DATE('$datapren','YYYY-MM-DD'))";
$stid5 = oci_parse($conn, $sql5);
$execute1 = oci_execute($stid5);

//Query ricerca id della prenotazione effettuata(l'ultima)
$sql6 = "SELECT idprenotazione FROM Amministratore.PRENOTAZIONI WHERE idprenotazione = (SELECT max(idprenotazione) FROM Amministratore.PRENOTAZIONI)";
$stid6 = oci_parse($conn, $sql6);
oci_execute($stid6);
while (oci_fetch($stid6)) {
    $idpren = oci_result($stid6, 'IDPRENOTAZIONE');
}

//Query ricerca sala prenotazione effettuata
$sql7 = "SELECT sala FROM Amministratore.AFFERENZE_SALA WHERE programma = '$codprogramma' AND cinema = '$codcinema'";
$stid7 = oci_parse($conn, $sql7);
oci_execute($stid7);
while (oci_fetch($stid7)) {
    $codsala = oci_result($stid7, 'SALA');
}

//Query INSERT POSTO/FILA
$posto = $_POST['Posto'];
$fila = $_POST['Fila'];

for($i=0, $n=count($posto); $i<$n; $i++){
    $varfila = $fila[$i]+1;
    $sql8 = "INSERT INTO Amministratore.AFFERENZE_POSTO (prenotazione, numposto, numfila, sala, cinema) values ('$idpren', '$posto[$i]', '$varfila', '$codsala', '$codcinema')";
    $stid8 = oci_parse($conn, $sql8);
    $execute2 = oci_execute($stid8);
}

if ($execute1 && $execute2) {
    echo '<script type="text/javascript">';
    echo 'window.location.href = "prenotazioneHTML.php";';
    echo 'var stile = "top=50, left=428, width=480, height=506, status=no, menubar=no, toolbar=no scrollbars=no";';
    echo 'alert("Prenotazione effettuata, procedere al pagamento.");';    
    echo 'window.open("pagamento/index.php", "", stile);';    
    echo '</script>';  
}

//chiusura sessione 
oci_close($conn);

?>