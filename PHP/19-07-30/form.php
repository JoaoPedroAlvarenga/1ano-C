<?php
	include "conexao.php";

	$codigo = $_POST["codigo"];
	$produto = $_POST["produto"];

	$sql = mysqli_query($cone, "INSERT INTO aula(codigo, produto) VALUES('$codigo', '$produto')");

	if ($sql){
		echo "<h1> cadastrado </h1> ";
	}else{
		echo "<h1> Deu erro,faz de novo </h1> ";
	}

?>