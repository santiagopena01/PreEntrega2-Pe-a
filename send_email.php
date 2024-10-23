<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $comentario = $_POST['comentario'];

    $to = "spenia@lowriskgroup.com.ar";  
    $subject = "Nuevo contacto desde el formulario";
    
    $message = "
    Nombre: $nombre\n
    Email: $email\n
    Teléfono: $telefono\n
    Comentario: $comentario
    ";
    
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado. Gracias por contactarnos.";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
