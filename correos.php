<?php
    $destinatario= 'phdemarco@gmail.com'
    // correo que recibira el mensaje

    $nombre = $_POST ['nombre'];
    $email = $_POST ['email'];
    $asunto = $_POST ['asunto'];
    $comentario = $_POST ['comentario'];

    $header = "Enviado desde Lado por lado";

    $mensajeCompleto = $mensaje . "\Atentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);

    echo "<script>alert('Correo enviado con exito')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>"
?>