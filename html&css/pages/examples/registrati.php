<?php
require 'controlloEmail.php';
require 'sendEmail.php';

$email = $_GET['email'];

/*
    * Apertura connessione al database
    * In caso di errore viene creato un popup di errore terminato lo script
    * @return mysqli
*/
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "iismpsnacks";
    $dbpass = "";
    $db = "my_iismpsnacks";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
    if($conn->connect_errno){
        echo json_encode(array('popUpName' => 'popDanger', 'title' => "Errore", 'caption' => 'Connessione interrotta, errore nel database!'));
        exit();
    }
    return $conn;
}

/*
    * Chiusura connessione al database
    * @param mysqli $conn
*/
function CloseCon($conn)
{
    $conn->close();
}

/*
    SCRIPT PRINCIPALE
*/

// Controllo se l'email è presente nel dominio
if (checkEmail($email)){
    //controllo se l'email è già presente nel db
    $conn = OpenCon();
    $sql = "SELECT * FROM utente WHERE email = '$email'";
    $result = $conn->query($sql);
    // Controllo se l'email è già presente nel database
    if ($result->num_rows > 0) {  
        echo json_encode(array('popUpName' => 'popWarning', 'title' => "Attenzione", 'caption' => 'Email già presente nel database'));
    // Invio email per l'attivazione dell'account
    } else {
        /*$sql = "INSERT INTO `utente` (`email`) VALUES ('$email')";
        $result = $conn->query($sql);*/
        sendEmail($email);
        echo json_encode(array('popUpName' => 'popSuccess', 'title' => "Ok", 'caption' => "Entro pochi minuti riceverai una mail di conferma all'indirizzo specificato. Controlla anche la cartella di spam"));
    }
    CloseCon($conn);
} else {
    echo json_encode(array('popUpName' => 'popDanger', 'title' => "Errore", 'caption' => "L'Email inserita non è corretta o non è presente nei nostri sistemi"));
}

?>
