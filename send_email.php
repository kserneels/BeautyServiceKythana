<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $bericht = $_POST['bericht'];

    // Email information
    $recipient = "beautyservicekythana@hotmail.com";
    $subject = "Contact Form Submission";
    $email_content = "Voornaam: $voornaam\n";
    $email_content .= "Achternaam: $achternaam\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Telefoonnummer: $telefoonnummer\n";
    $email_content .= "Bericht:\n$bericht\n";

    // Email headers
    $headers = "From: $voornaam $achternaam <$email>";

    // Send email
    if (mail($recipient, $subject, $email_content, $headers)) {
        // Email sent successfully, redirect back to form page
        header("Location: your_form_page.php");
        exit();
    } else {
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    echo "There was an error with your submission. Please try again.";
}
