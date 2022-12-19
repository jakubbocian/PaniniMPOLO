<?php
require 'controlloEmail.php';

$email = $_GET['email'];

//connessione al db
function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "ciao";
    $db = "MPolo";

    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn)
{
    $conn->close();
}


$conn = OpenCon();

//controllo se l'email è nel dominio
if (checkEmail($email)){
    //controllo se l'email è già presente nel db
    $sql = "SELECT * FROM utente WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo json_encode(array('popUpName' => 'popWarning', 'title' => "Attenzione", 'caption' => 'Email già presente nel database'));
    } else {
        $sql = "INSERT INTO `utente` (`email`) VALUES ('$email')";
        $result = $conn->query($sql);
        echo json_encode(array('popUpName' => 'popSuccess', 'title' => "Ok", 'caption' => "Entro pochi minuti riceverai una mail di conferma all'indirizzo specificato. Controlla anche la cartella di spam"));
    }
} else {
    echo json_encode(array('popUpName' => 'popDanger', 'title' => "Errore", 'caption' => "L'Email inserita non è corretta"));
}

CloseCon($conn);
//commento fake
?>
