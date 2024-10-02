<?php

$hostname = 'localhost';
$database = 'clientes';
$user = 'root';
$password = '';

$mysqli = new mysqli($hostname,$user,$password,$database);
if ($mysqli -> connect_errno){
    echo "Conexão não pode ser concluida:(".$mysqli -> connect_errno .") ". $mysqli -> connect_error;
}

?>