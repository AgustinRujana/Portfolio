<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'aguru2008@hotmail.com'
    $email_subject = 'Nueva Consulta en Portfolio'
    $email_body = "Nombre: $name.\n".
                    "Email: $email.\n". 
                    "Mensaje: $message.\n";
    $to = 'aguru2008@hotmail.com'
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");

?>