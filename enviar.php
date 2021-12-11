<?php
$to=$_POST['email'];
$asunto=$_POST['asunto'];
$message=$_POST['msg'];

$headers="MIME-Version:1.0" . "\r\n";
$headers="Content-type:text/plain;charset=UTF-8" . "\r\n";
$headers="From: Prueba <test@email.com>" . "\r\n";
mail($to,$asunto,$message,$headers);//funcion propia de php
?>