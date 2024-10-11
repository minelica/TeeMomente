<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'libs/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/src/SMTP.php';

if (isset($_POST["Bestellen"])) {

    $name = htmlspecialchars($_POST['name']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $produkt = htmlspecialchars($_POST['produkt']);
    $menge = htmlspecialchars($_POST['menge']);
    $email = htmlspecialchars($_POST['email']);

    $mail = new PHPMailer(true);
    try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'teemomente.info@gmail.com';
    $mail->Password = 'xpvjohhjvbjeoqtv';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom('teemomente.info@gmail.com');

    $mail->addAddress($email);

    $mail->isHTML(true);

    $mail->Subject = "Ihre Bestellung bei TeeMomente";
    $message = "Hallo $name,\n\n";
    $message .= "Ihre Bestellung wurde erfolgreich aufgegeben:\n\n";
    $message .= "Name: $name\n";
    $message .= "Adresse: $adresse\n";
    $message .= "Produkt: $produkt\n";
    $message .= "Menge: $menge\n\n";
    $message .= "Vielen Dank für den Einkauf!\n\n";
    $message .= "Ihr TeeMomente-Team";
    $mail->Body = nl2br($message);

    $mail->send();

    echo "
        <script>
        alert('Ihre Bestellung wurde erfolgreich aufgegeben. Vielen Dank!');
        document.location.href = 'bestellung.php';
        </script>
        ";
    } catch (Exception $e) {
        echo "
        <script>
        alert('Fehler {$mail->ErrorInfo}');
        document.location.href = 'bestellung.php';
        </script>
        ";
    }
} else {
    echo "
    <script>
    alert('Bitte füllen Sie alle Felder aus.');
    document.location.href = 'bestellung.php';
    </script>
    ";
}
?>