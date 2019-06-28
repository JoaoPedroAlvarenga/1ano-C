<?php
	include "conexao.php";

	$nome = $_POST["nome"];
	$cpf = $_POST["cpf"];

	$sql = mysql_query($conexao, "insert into cliente (nome, cpf) values ('$nome','$cpf')");

	if ($sql) {
		echo "cadastrado";
	}else{
		echo "deu erro,faz de novo";
	}

?>