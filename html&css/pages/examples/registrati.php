<?php
require 'controlloEmail.php';

$email = $_GET['email'];

//connessione al db
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

function CloseCon($conn)
{
    $conn->close();
}

//controllo se l'email è nel dominio
if (checkEmail($email)){
    //controllo se l'email è già presente nel db
    $conn = OpenCon();
    $sql = "SELECT * FROM utente WHERE email = '" . $email . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo json_encode(array('popUpName' => 'popWarning', 'title' => "Attenzione", 'caption' => $sql . 'Email già presente nel database'));
    } else {
        $sql = "INSERT INTO `utente` (`email`) VALUES ('" . $email . "')";
        $result = $conn->query($sql);
        echo json_encode(array('popUpName' => 'popSuccess', 'title' => "Ok", 'caption' => $sql .  "Entro pochi minuti riceverai una mail di conferma all'indirizzo specificato. Controlla anche la cartella di spam"));
    }
    CloseCon($conn);
} else {
    echo json_encode(array('popUpName' => 'popDanger', 'title' => "Errore", 'caption' => "L'Email inserita non è corretta o non è presente nei nostri sistemi"));
}

?>
