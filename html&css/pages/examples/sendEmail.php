<?php
    function uniqidReal($lenght = 6) {
        // uniqid gives 13 chars, but you could adjust it to your needs.
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }

    function formatEmail($email){
        $messagge = "";
        $messagge .= uniqidReal();
        return $messagge;
    }

    function sendEmail($email){
        $messagge = formatEmail($email);
        $to = $email;
        $subject = "Conferma registrazione";
        $txt = "Ciao, clicca sul link per confermare la registrazione: http://localhost/html&css/pages/examples/registrati.php?email=$email&code=$messagge";
        $headers = "From: no-reply@mpolo.it" . "\r\n";
        mail($to,$subject,$messagge,$headers);
    }
?>