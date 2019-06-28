<?php

$banco = "aula";
$usuario = "root";
$senha = "";
$conexão = mysql_connect($banco,$usuario,$senha,localhost);

if ($conexão) {
	echo "<h1> Conectado </h1>";
}else{
	echo "<h1> 404 Error </h1";
}







?>