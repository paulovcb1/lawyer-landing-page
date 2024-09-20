<?php


$email = $_POST['email'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];



$telefone_envio = '55'.preg_replace('/[ ()-]+/' , '' , $telefone);

$mensagem .= 'Olá '.$nome.', Bom dia! Como você está? %0A';
$mensagem .= 'Obrigado por se cadastrar em nosso site! %0A%0A';
$mensagem .= '*Email:* _'.$email.'_ %0A%0A';	
$mensagem .= '*Telefone:* '.$telefone.' %0A%0A';	
$mensagem .= 'Estamos aqui para ajudar você a conquistar sua aposentadoria! %0A';
$mensagem .= 'Como posso te ajudar hoje?. %0A';


        require("texto.php");





?>