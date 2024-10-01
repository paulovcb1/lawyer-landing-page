<?php
$url = "http://api.wordmensagens.com.br/send-text";

$data = array('instance' => "1L9240924051415OWN802",
              'to' => $telefone_envio,
              'token' => '0U18P-Z2N-0493S',
              'message' => $mensagem);

$options = array('http' => array(
               'method' => 'POST',
               'content' => http_build_query($data)
));

 $stream = @stream_context_create($options);

 $result = @file_get_contents($url, false, $stream);

// Inicio da Verificação de Envio
$res123 = json_decode($result);
$erro = $res123->erro;

if ($erro == true) {
  $status_envio = 'Dados de acesso enviados com Sucesso';
} else {
  $status_envio = 'Falha ao enviar a mensagem';
}
// Fim da Verificação de Envio

//Retorno Completo do Status

 echo $status_envio;

?>