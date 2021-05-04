<?php

$mysql = new mysqli('localhost', 'root','', 'blog');
$mysql->set_charset('utf-8');

if($mysql != TRUE){
       echo "Erro na conexão";
}

?>