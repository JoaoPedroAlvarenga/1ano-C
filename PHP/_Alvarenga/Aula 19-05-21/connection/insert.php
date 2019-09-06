<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Resultado</title>
</head>
<body>

<?php 

include 'connection.php';

$nome = $_POST['cmpNome'];
$cpf = $_POST['cmpCpf'];
$idade = $_POST['cmpIdade'];

$sql = mysql_query($connection, "INSERT INTO cliente(nome,cpf,idade) VALUES('$nome','$cpf', $idade) ");

if ($sql) {
	echo "<h1>Sign in sucessful!</h1>";
} else {
	echo "<h1>Error</h1>";
}

?>
</body>
</html>