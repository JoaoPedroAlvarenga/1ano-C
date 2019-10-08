<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Connection</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php 

	include 'connection.php'
	
	$user = "root";
	$password = "";
	$database = "users";
	$connection = mysqli_connect('localhost',$user,$password,$database);

	if ($connection) {
		echo "<h1> Conexão criada com sucesso (Conexao)</h1>  ";
	} else {
		echo "<h1> Deu Error (Conexao) </h1>";
	}
	
?>
</body>
</html>