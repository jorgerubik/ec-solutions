<?php

$nombre = $_POST['correo_nombre'];
$correo = $_POST['correo_email'];
$mensaje = $_POST['correo_mensaje'];
$asunto ="correo";
// El mensaje
$mensaje = "Nombre: ". $nombre ."\r\nCorreo: ". $correo ."\r\nMensaje: ". $mensaje;

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

$cabeceras = 'From: noreply@fabricadesoluciones.com' . "\r\n" .
    'Reply-To: ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Enviarlo
mail('crodriguez@proteak.com', $asunto, $mensaje, $cabeceras);

mail('kreyes@fabricadesoluciones.com', $asunto, $mensaje, $cabeceras);

header("Location:".$_SERVER['HTTP_REFERER']);