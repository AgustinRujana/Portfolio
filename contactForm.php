<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "aguru2013@hotmail.com";
$subject = "Contact Form - Portfolio";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="/animation.css">
    <link rel="stylesheet" href="/style.css">
    <title>Agustin Rujana</title>
    <link rel="shortcut icon" href="./images/ico.ico" type="image/x-icon">
</head>
<body>
    <body>
        <div class="title-mensaje">Su mensaje fue enviado.</div>
        <a href="/" class="volver-btn2">
        <div class="contact-circle"></div>
        <p class="volver-text">Volver</p>
    </a>
    </body>
</html>