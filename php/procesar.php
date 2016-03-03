<?php

$nombre = $_POST['correo_nombre'];
$correo = $_POST['correo_email'];
$empresa = $_POST['correo_empresa'];
$nicho = $_POST['correo_nicho'];
$servicio = $_POST['correo_servicio'];
$mensaje = $_POST['correo_mensaje'];

//Cabeceras
$cabeceras = "From: no-reply@ecsolutions.com" . "\r\n";
$cabeceras .= "Reply-To: " . "\r\n";
$cabeceras .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$cabeceras .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

// Mensaje
$mail = "<html>";
  $mail .= "<head>";
    $mail .= "<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet'>";
  $mail .= "</head>";
  $mail .= "<body>";
  	$mail .= "<div class='container'>";
  	  $mail .= "<div class='row'>";
  	  	$mail .= "<div class='col-md-12 text-center'>";
  	  	  $mail .= "<img src='http://www.ec-solutions.com.mx/imagenes/Logomenu.svg' style='width: 120px; height: auto;'>";
	    $mail .= "</div>";
	  $mail .= "</div>";
  	$mail .= "<div class='container'>";
  	  $mail .= "<div class='row'>";
  	  	$mail .= "<div class='col-md-12 text-center'>";
  	  	  $mail .= "<h1 class='text-center' style='color: #0597D3;'>Tenémos un Nuevo Cliente</h1>";
	    $mail .= "</div>";
	  $mail .= "</div>";
  	  $mail .= "<div class='row'>";
  	  	$mail .= "<div class='col-md-12'>";
		  $mail .= "<div class='table-responsive'>";
		    $mail .= "<table class='table-hover table-bordered text-justify'>";
			  $mail .= "<tbody>";
			  	$mail .= "<tr>";
			  	  $mail .= "<td style='padding: 0 15px;'><h5>Nombre</h5></td>";
			  	  $mail .= "<td style='padding: 0 15px;'>". $nombre ."</td>";
			  	$mail .= "</tr>";
			  	$mail .= "<tr>";
			  	  $mail .= "<td style='padding: 0 15px;'><h5>Correo</h5></td>";
			  	  $mail .= "<td style='padding: 0 15px;'>". $correo ."</td>";
			  	$mail .= "</tr>";
			  	$mail .= "<tr>";
			  	  $mail .= "<td style='padding: 0 15px;'><h5>Empresa</h5></td>";
			  	  $mail .= "<td style='padding: 0 15px;'>". $empresa ."</td>";
			  	$mail .= "</tr>";
			  	$mail .= "<tr>";
			  	  $mail .= "<td style='padding: 0 15px;'><h5>Nicho</h5></td>";
			  	  $mail .= "<td style='padding: 0 15px;'>". $nicho ."</td>";
			  	$mail .= "</tr>";
			  	$mail .= "<tr>";
			  	  $mail .= "<td style='padding: 0 15px;'><h5>Mensaje</h5></td>";
			  	  $mail .= "<td style='padding: 15px 15px;'>". $mensaje ."</td>";
			  	$mail .= "</tr>";
			  $mail .= "</tbody>";
		    $mail .= "</table>";
		  $mail .= "</div>";
	    $mail .= "</div>";
	  $mail .= "</div>";
	$mail .= "</div>";
    $mail .= "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";
    $mail .= "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>";
  $mail .= "</body>";
$mail .= "</html>";

// Enviarlo
//if(mail('arpapel@arpapel.com.mx', $asunto, $mail, $cabeceras) && mail('kreyes@fabricadesoluciones.com', $asunto, $mail, $cabeceras) && mail('lcallejas@fabricadesoluciones.com', $asunto, $mail, $cabeceras)){
if($nombre != "" || $correo != "" || $empresa != "" || $nicho != "" || $servicio != "" || $mensaje != ""){
	if(mail('flores@grupoonest.com', $servicio, $mail, $cabeceras)){
		echo "<div class='alert alert-success alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
	                    <p>Correo enviado, gracias por comunicarte con nosotros, en breve nos comunicaremos contigo.</p>
	                </div>";
	}else{
		echo "<div class='alert-danger alert-dismissible' role='alert'>
				<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
				<span aria-hidden='true'>&times;</span>
				</button>
	                <p>Hubo un error al enviar tu correo, intenta más tarde.</p>
	            </div>";
	}
}

//header("Location:".$_SERVER['HTTP_REFERER']);
//header("Location: http://".$_SERVER['HTTP_HOST']);
?>