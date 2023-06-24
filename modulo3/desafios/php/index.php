<?php

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" ."\r\n";
$nombre = $_POST['nombre'];

echo 'Gracias por comunicarse con nosotros ' . $nombre;
//mail($to, $subject, $message, $headers);
?>