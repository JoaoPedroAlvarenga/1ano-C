<!DOCTYPE html>
<html>
<head>
	<title> sucess! </title>
</head>
<body>

	<?php 

		include 'connection.php';

		$name = $_POST['inputName'];
		$mail = $_POST['inputMail'];
		$nameuser = $_POST['inputUser'];
		$passworduser = $_POST['inputPassword'];
	
		$sql = mysqli_query($connection, "INSERT INTO informationusers(name, mail, nameuser, password) VALUES('$name', '$mail', '$nameuser', '$passworduser')");


		if ($sql) {

			echo "<script></script>";
			/*echo "<h1> Cadastro feito com sucesso! </h1>
			 <h2> voltar </h2> ";*/
		} else {
			echo "<h1> OPS! Error no servidor! </h1>";
		}

	 ?>
	 <script type="text/javascript"> 

	 	const btn = document.querySelector('h2');

	 	btn.eventListener('click', function () {
	 		// body...
	 	});

	 </script>
</body>
</html>