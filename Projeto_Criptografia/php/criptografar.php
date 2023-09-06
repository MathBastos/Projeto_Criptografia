<?php

// function gerar_chaves() {
//     $config = array(
//         "private_key_bits" => 2048,
//         "private_key_type" => OPENSSL_KEYTYPE_RSA,
//         "config" => "C:/xampp/php/extras/openssl/openssl.cnf"
//     );
    
//     $chaves = openssl_pkey_new($config);

//     openssl_pkey_export($chaves, $chave_privada);

//     $chave_publica = openssl_pkey_get_details($chaves);
//     $chave_publica = $chave_publica["key"];

//     return array(
//         'privateKey' => $chave_privada,
//         'publicKey' => $chave_publica,
//     );
// }


// function criptografar($mensagem, $chave_publica) {
//     openssl_public_encrypt($mensagem, $mensagem_crip, $chave_publica);
//     return base64_encode($mensagem_crip);
// }


// $teste = "Mensagem secreta";
// $mensagem = criptografar($teste, $chave_publica);
// $final = descriptografar($mensagem, $chave_privada);
// echo "Mensagem Original: $teste<br>";
// echo "Mensagem Criptografada: $mensagem<br>";
// echo "Mensagem Descriptografada: $final<br>";

?>