<?php
$host = 'localhost:3306';
$usuariobd = 'root';
$senhabd = '';
$nomebd = 'bd_lavajato';

$conexao = new mysqli($host, $usuariobd, $senhabd, $nomebd);

if ($conexao->connect_error){
    echo "erro ao conectar ".$conexao->connect_error;
} else{
    echo "conexão sucedida!";
}
?>