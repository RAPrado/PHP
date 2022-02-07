<?php
/**
 * Referência : https://wiki.portugal-a-programar.pt/dev_web:php:validar_url_email_ip 
 */
 
$url	= 'URL a ser validada';
$email	= 'e-mail a ser validada';
$ip	= 'IP a ser validada';
 
// Validar url
if( filter_var( $url, FILTER_VALIDATE_URL ) ) 
{ 
	echo'A URL informada é  válida'; 
}
else 
{ 
	echo'A URL informada é  inválida'; 
}
 
// Validar e-mail
if( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) 
{ 
	echo'O e-mail informado é válido'; 
}
else
{ 
	echo'O e-mail informado é inválido'; 
}
 
// Validar IP
if( filter_var( $ip, FILTER_VALIDATE_IP ) )
{ 
	echo'O IP informado é válido'; 
}
else
{ 
	echo'O IP informado é inválido'; 
}
 
?>
