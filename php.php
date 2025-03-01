<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);  // Evita inyección de código
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Validación básica
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Correo no válido.";
        exit;
    }

    // Configuración del correo
    $to = "zzerobudget@gmail.com"; // Cambia esto por tu correo real
    $subject = "CLIENTE ELECTRO";
    $message = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "Hubo un error al enviar tu mensaje. Intenta nuevamente.";
    }
}
?>