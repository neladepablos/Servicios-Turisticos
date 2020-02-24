<?php
	$destino="A19007385@idat.edu.pe";
	$usuario=$_POST["usuario"];
	$email=$_POST["email"];
	$comentarios=$_POST["comentarios"];

	$contenido="Usuario:".$usuario."\nEmail:".$email."\nComentarios:".$comentarios;

	if(mail($destino,"Contactos",$contenido));

	echo("<script>alert('Tu Mensaje a sido enviado con Exito!!!');</script>");
	echo("<script>window.location.href=('index.html');</script>");

?>