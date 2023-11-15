<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $bericht = $_POST['bericht'];

    $to = "beautyservicekythana@hotmail.com";
    $subject = "Contact Form Submission";
    $message = "Voornaam: $voornaam\nAchternaam: $achternaam\nEmail: $email\nTelefoonnummer: $telefoonnummer\nBericht: $bericht";

    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
