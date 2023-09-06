<?php

$chave_privada = file_get_contents("C:/xampp/htdocs/projeto/php/chave_privada.pem");
$chave_publica = file_get_contents("C:/xampp/htdocs/projeto/php/chave_publica.pem");


function descriptografar($mensagem_crip, $chave_privada) {
    $mensagem_crip = base64_decode($mensagem_crip);
    openssl_private_decrypt($mensagem_crip, $mensagem_decript, $chave_privada);
    return $mensagem_decript;
}

if(isset($_POST["mensagem"]))
{
    $dados = $_POST["mensagem"];
    $mensagem = descriptografar($dados, $chave_privada);
    return $mensagem;
}

?>  