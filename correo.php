<?php

$nombre = $_POST['correo_nombre'];
$correo = $_POST['correo_email'];
$mensaje = $_POST['correo_mensaje'];
$empresa = $_POST['correo_empresa'];
$nicho = $_POST['correo_nicho'];
$servicio = $_POST['correo_servicio'];
//$asunto ="correo";
// El mensaje
$mensaje = "Nombre: ". $nombre ."\r\nCorreo: ". $correo ."\r\nMensaje: ". $mensaje ."\r\nEmpresa: ". $empresa ."\r\nNicho: ". $nicho;

// Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
$mensaje = wordwrap($mensaje, 70, "\r\n");

$cabeceras = 'From: noreply@ecsolutions.com' . "\r\n" .
    'Reply-To: ' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Enviarlo
mail('jhernandez@fabricadesoluciones.com', $servicio, $mensaje, $cabeceras);

mail('kreyes@fabricadesoluciones.com', $asunto, $mensaje, $cabeceras);

header("Location:".$_SERVER['HTTP_REFERER']);