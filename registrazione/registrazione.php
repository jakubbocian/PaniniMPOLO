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
        echo "Email già presente nel database";
    } else {
        echo "Email non presente" . "<br>";
        $sql = "INSERT INTO `utente` (`email`) VALUES ('$email')";
        $result = $conn->query($sql);
        echo "Email inserita nel database";
    }
} else {
    echo "Email non presente nel dominio";
}


CloseCon($conn);
?>