<?php

$nome = (int)$_GET["a"];

// var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"]; // => Localiza o IP do usuário
$ipp = $_SERVER["SCRIPT_NAME"]; // => Verifica por onde o usuário passou.

echo $ip;
echo $ipp;

?>