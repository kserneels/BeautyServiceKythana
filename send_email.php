<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $bericht = $_POST['bericht'];

    // Set up email
    $to = "beautyservicekythana@hotmail.com";
    $subject = "Contact Form Submission";
    $message = "Voornaam: $voornaam\nAchternaam: $achternaam\nEmail: $email\nTelefoonnummer: $telefoonnummer\nBericht: $bericht";

    // Headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
