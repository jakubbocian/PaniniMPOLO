<?php
function getAlunni() {
    $dati = array();
    $fp = fopen("db_marcopolo.csv", "r");
    while ($line = fgetcsv($fp, 1000, ";")) {
        $dati[] = $line;
    }
    fclose($fp);
    return $dati;
}


function checkEmail($email) {
    $dati = getAlunni();
    $fp = fopen("db_marcopolo.csv", "r");
    while ($line = fgetcsv($fp, 1000, ";")) {
        $dati[] = $line;
    }
    fclose($fp);
    $risposta = false;
    for($i=0; $i<count($dati); $i++){
        if($dati[$i][4] == $email){
            $risposta = true;
            break;
        }
    }
    return $risposta;
}
?>