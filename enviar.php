<?php
$to=$_POST['email'];
$subject=$_POST['asunto'];
$message=$_POST['msg'];

$headers="MIME-Version:1.0" . "\r\n";
$headers .="Content-type:text/plain;charset=UTF-8" . "\r\n";
$headers .="From: Prueba <test@email.com>" . "\r\n";
$headers .="Cc: connieansaldi5@gmail.com" ."\r\n gamaccuse@gmail.com";
mail($to .", connieansaldi5@gmail.com, gamaccuse@gmail.com",$subject,$message,$headers);//funcion propia de php
?>