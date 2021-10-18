<?php

$to      = Config::EMAIL_USER;
$subject = 'Contato - Banca Comunitária';
$message = 'Email de '. $_POST['txtNomeCompleto']. "\r\n" .$_POST['txtMensagem'];
$dest = $_POST['txtEmail'];

$headers = "From: ".$dest;

mail($to, $subject, $message, $headers);

header('Location: confirmcontato');

?> 