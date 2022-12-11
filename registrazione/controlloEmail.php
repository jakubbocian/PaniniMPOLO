<?php
//prendo l'email
$email = $_REQUEST['email'];

//importo il file csv
$fp = fopen("dB_marcopolo.csv", "r");
//creo un array con i dati del file csv
$dati = array();
while ($line = fgetcsv($fp, 1000, ";")) {
    $dati[] = $line;
}
fclose($fp);

$risposta = "email non presente";

//controllo se l'email è già presente nel file csv
for($i=0; $i<count($dati); $i++){
    if($dati[$i][4] == $email){
        $risposta = "email presente";
        break;
    }
}

//invio risposta
echo $risposta;
?>