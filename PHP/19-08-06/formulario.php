
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		include 'conexao.php';

		$nome 		= $_POST["nomeCliente"];
		$cpf 		= $_POST["cpfCliente"];
		$telefone 	= $_POST["telefoneCliente"];
		$email 		= $_POST["emailCliente"];

		$sql = mysqli_query($conexao, "INSERT INTO cliente(nome, cpf, telefone, email) VALUES('$nome', '$cpf', 'telefone', '$email')");

		if ($sql) {
			echo("<h1> Database ON </h1>");
		}else{
			echo("<h1> Database OFF </h1>");
		}
	?>
</body>
</html>
