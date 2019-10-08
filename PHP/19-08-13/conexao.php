<?php

$usuario = "root";
$senha = "";
$banco = "aula";

$conexão = mysql_connect("localhost",$usuario,$senha,$banco);

if ($conexão) {
	echo "<h1> Conectado </h1>";
}else{
	echo "<h1> Deu erro  <h1>";
}

?>