<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php 

	include 'conexao.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$cpf = $_POST['cpf'];
	$usuario = $_POST['user'];
	$senha = $_POST['password'];

	$sql = mysqli_query($connection, "INSERT INTO cliente(nome, email, cpf, usuario	,senha) VALUES('$nome', '$email', '$cpf', '$usuario', '$senha')");


	if ($sql) {
		echo "<h1>Sign in sucessful! (Insertar)</h1>";
	} else {
		echo "<h1>Error (Insertar)</h1>";
	}


?>
</body>
</html>
