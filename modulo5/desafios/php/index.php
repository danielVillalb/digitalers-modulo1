<?php
$to = "villalbacarlosd97@gmail.com";
$subject = "Mail desde el formulario";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" ."\r\n";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mes = $_POST['comentarios'];
$message = "
Hola mi nombre es $nombre
";
echo 'Gracias por comunicarse con nosotros ' . $nombre;
mail($to, $subject, $message, $headers);
?>