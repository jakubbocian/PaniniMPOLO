<?php
require 'controlloEmail.php';

$email = $_GET['email'];

//genero un id univoco
function uniqidReal($lenght = 6) {
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($lenght / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
    } 
    return substr(bin2hex($bytes), 0, $lenght);
}

//controllo email
if(checkEmail($email)){
    $id = uniqidReal();
    $hashedId = password_hash($id, PASSWORD_DEFAULT);
    $hashedIdLenght = strlen($hashedId);
    echo $id . " " . $hashedId . " " . $hashedIdLenght;
} else {
    echo "email non valida";
}
?>