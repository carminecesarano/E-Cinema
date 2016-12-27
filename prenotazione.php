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
  $errore=oci_error();
  trigger_error(htmlentities($errore["message"], ENT_QUOTES)E_USER_ERROR);
  exit();
}

// Recupero dati dal form

$cinema= $_POST["Cinema"];
$film= $_POST["Film"];
$datafilm= $_POST["datafilm"];
$orario= $_POST["ora"];
//Con lo script js scegliamo sala, fila e posto sulla mappa
$sala= $_POST["sala"];
$fila= $_POST["fila"];
$posto= $_POST["posto"];
                            //non sono sicuro se anche i posti selezionati tramite js in questo modo 
                          //vanno memorizzati nel buffer stdin con il metodo post, dobbiamo controllare se è corretto


//Query prenotazione del biglietto (dato che non conosco la BD ipotizzo l'esistenza di un' entità "POSTI LIBERI" con gli attributi di sopra)

$query="SELECT* FROM Posti_liberi WHERE cinema='$cinema' AND film='$film' AND data='$datafilm' AND sala='$sala' AND fila='$fila' AND posto='$POSTO' AND spettacolo='ora'";


//Esecuzione della query
$stid=oci_parse($conn,$query);
oci_execute($stid);

if(oci_fetch($stid)==1){
  echo"Prenotazione effettuata con successo";
  //Elimino i posti prenotati da quelli liberi
  $query="DELETE* FROM Posti_liberi WHERE cinema='$cinema' AND film='$film' AND data='$datafilm' AND sala='$sala' AND fila='$fila' AND posto='$POSTO' AND spettacolo='ora'";
  //libera tutte le risorse associate allo statement $stid
   oci_free_statement($stid);
  $stid=oci_parse($conn,$query);
  oci_execute($stid);
 
} else {
  echo"I posti selezionati non sono disponibili tra quelli liberi";
    
}

//chiusura sessione 
oci_close($conn);

?>

