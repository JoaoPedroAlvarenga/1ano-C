<?php
	include "conexao.php";

	$nome = $_POST["nome"];
	$media = $_POST["media"];
	$cpf = $_POST["cpf"];

	$inserir = mysqli_query($conexao, "INSERT INTO cliente (nome, media, cpf) VALUES('$nome', $media , '$cpf')");

	if ($inserir) {
		echo "<h1> cadastrado </h1> ";
	}else{
		echo "<h1> Deu erro,faz de novo </h1> ";
	}

?>