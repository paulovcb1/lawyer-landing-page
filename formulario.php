<?php


$email = $_POST['email'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];



$telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $telefone);

		$mensagem = '*'.$nome_sistema.'* %0A';
		$mensagem .= 'Você se cadastrou em nosso site  %0A';
		$mensagem .= '*Nome:* '.$nome.' %0A%0A';	
		$mensagem .= '*Email:* '.$email.' %0A%0A';	
		$mensagem .= '_Faça seu acesso e troque sua senha_%0A';	

        require("texto.php");




    // $destinatario = $email;
    // $assunto = ' - Alguem se Cadastrou em seu site';
    // $mensagem = 'Você recebeu um novo acesso em seu email segue os dados do cliente '. $email . $telefone. $nome;
    // $cabecalhos = "From: ".$email_sistema;
   
    // @mail($destinatario, $assunto, $mensagem, $cabecalhos);
?>