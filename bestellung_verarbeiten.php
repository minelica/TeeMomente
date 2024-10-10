<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'libs/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $produkt = htmlspecialchars($_POST['produkt']);
    $menge = htmlspecialchars($_POST['menge']);

    $to = "teemomente.info@gmail.com";
    $subject = "Neue Bestellung von TeeMomente";
    $message = "Es wurde eine neue Bestellung aufgegeben:\n\n";
    $message .= "Name: $name\n";
    $message .= "Adresse: $adresse\n";
    $message .= "Produkt: $produkt\n";
    $message .= "Menge: $menge\n";

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'teemomente.info@gmail.com'; 
        $mail->Password = ''; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('teemomente.info@gmail.com', 'TeeMomente');
        $mail->addAddress($to);

        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();
        echo "Vielen Dank, $name! Ihre Bestellung über $menge Stück(e) $produkt wurde erfolgreich aufgegeben.";
    } catch (Exception $e) {
        echo "Es gab ein Problem beim Senden Ihrer Bestellung. Bitte versuchen Sie es später erneut. Fehler: {$mail->ErrorInfo}";
    }
} else {
    echo "Ungültige Anfrage.";
}
