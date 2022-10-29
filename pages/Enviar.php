<?php
$mail = $_POST['email'];
$message = $_POST['Mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $mail . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $mail. " \r\n";
$message .= "Mensaje: " . $_POST['Mensaje'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'samueluriarte757@hotmail.com';
$asunto = 'Contacto desde la pagina Samuel Uriarte';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:C:\Users\lmatute\Desktop\Leonardo Matute\coderhouse\pf-matutepe-a\pages\after-contacto.html");
?>