<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 

		$user = "root";
		$password = "";
		$database = "loja";

		$conexao = mysql_connect('localhost', $user, $password, $database);

		if ($conexao) {
			echo("<h1> Conexão ON </h1>");
		}else{
			echo("<h1> Conexão OFF </h1>");
		}

	 ?>
</body>
</html>
