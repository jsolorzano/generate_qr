<?php
$textqr = $_POST['textqr'];  // Recibo la variable pasada por post
$sizeqr = $_POST['sizeqr'];  // Recibo la variable pasada por post

include('vendor/autoload.php');  // Llamamos al autoload de la clase que genera el QR
use Endroid\QrCode\QrCode;

$qrCode = new QrCode($textqr);  // Nueva instancia de la clase QrCode
$qrCode->setSize($sizeqr);  // Establecemos el tamaño de la imagen a generar
//header('Content-Type: '.$qrCode->getContentType());
$image = $qrCode->writeString();  // Salida en formato de texto

$imageData = base64_encode($image);  // Codifico la imagen usando base64_encode

echo '<img src="data:image/png;base64,'.$imageData.'">';
?>
