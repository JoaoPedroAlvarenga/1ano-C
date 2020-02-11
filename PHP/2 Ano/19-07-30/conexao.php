<?php

$usuario = "root";
$senha = "";
$banco = "pisco";
$cone = mysql_connect("localhost",$usuario,$senha,$banco);

if ($cone) {
	echo "<h1> Conectado </h1>";
}else{
	echo "<h1> Deu erro  <h1>";
}

?>