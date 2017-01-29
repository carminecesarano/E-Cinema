<?php
session_start();
// Dati di connessione al db Oracle
$db_user = 'WEB_APP';
$db_password = "web_app";
$db_host = "localhost/XE";

//Connessione a Oracle
$conn = oci_connect($db_user,$db_password,$db_host);

//recupero dati
$intestatario = $_POST["intestatario"];
$number = $_POST["number"];
$data = $_POST["data"];
$cvs = $_POST["cvs"];


if(empty($intestatario) || empty($number) || empty($data) || empty($cvs)){
    echo '<script type="text/javascript">';
    echo 'alert("Attenzione. Prenotazione non effettuata. Dati di pagamento mancanti o non corretti.");';
    echo 'window.close();';
    echo '</script>';
    
    $sql = "UPDATE AMMINISTRATORE.PRENOTAZIONI SET PAGATO = 'N' WHERE idprenotazione = (SELECT max(idprenotazione) FROM Amministratore.PRENOTAZIONI)";
    $stid = oci_parse($conn, $stid);
    oci_execute($stid);
}else {
    echo '<script type="text/javascript">';
    echo 'alert("Pagamento effettuato con successo.");';    
    echo 'window.close();';    
    echo '</script>';
}

?>