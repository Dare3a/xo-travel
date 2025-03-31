<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $message = $_POST['message'];


    $to = 'xotravelkombiprevoz@gmail.com';
    $subject = 'Contact form';
    $body = "Ime: $name\r\n\nE-mail: $email\n\nTelefon: $telefon\n\nPoruka: $message";

// More headers
    $headers = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
    $headers .= 'Reply-To: ' . $name . ' <' . $email . '>' . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/plain; charset=UTF-8' . "\r\n";
    $headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";
    if (mail($to, $subject, $body, $headers)) {
        $result = true;
    }

}
include 'index.html';
?>
