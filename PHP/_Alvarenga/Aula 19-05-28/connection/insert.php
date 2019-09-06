<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf-8">
<head>
	<title>Resultado</title>
</head>
<body>
	<?php 

		include 'connection.php';

		$nome = $_POST['cmpNome'];
		$cpf = $_POST['cmpCpf'];

		$sql = mysqli_query($connection, "INSERT INTO cliente(nome,cpf) VALUES('$nome','$cpf')");
		

		if ($sql) {
			echo "<h1>Sign in sucessful!</h1>";
		} else {
			echo "<h1>Error</h1>";
		}

	 ?>
</body>
</html>