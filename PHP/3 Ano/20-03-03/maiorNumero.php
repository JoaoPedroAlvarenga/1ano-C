<!DOCTYPE html>
<html>
<head>
	<title>oi oi</title>
</head>
<body>

	<form method="post" >
		<h1>Nota 1</h1>
		<input type="number" name="nota1">


		<h1>Nota 2</h1>
		<input type="number" name="nota2">

		<input type="submit" name="">
	</form>

<?php

	$n1 = $_POST["nota1"]; 
	$n2 = $_POST["nota2"];
	$maior = [];
	$menor = [];

	if($n1 != $n2){
		if($n1 > $n2){
			$maior = [$n1,"nota de numero 1"];
			$menor = [$n2,"nota de numero 2"];
		}
		$menor = [$n1,"nota de numero 1"];
		$maior = [$n2,"nota de numero 2"];

		echo("O numero maior e a $maior[0] com o valor de $maior[1]");
		echo("Esse numero e maior por" $maior[0])
	}else{
		echo("O numeros sao iguais");
	}
?>

</body>
</html>