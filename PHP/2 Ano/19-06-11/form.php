<?php
	include "conexao.php";

	$nome = $_POST["nome"];
	$email = $_POST["email"];

	$sql = mysql_query($conexao, "insert into cliente (nome, email) values('$nome', '$email')");

	if ($sql) {
		echo "<h1> cadastrado </h1> ";
	}else{
		echo "<h1> Deu erro,faz de novo </h1> ";
	}

?>