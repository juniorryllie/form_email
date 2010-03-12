<?php


	$email= 'junior.ryllie@gmail.com';
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	
	
	mail ($email,$assunto, $mensagem)

?>