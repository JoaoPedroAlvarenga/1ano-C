<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Resultado</title>
</head>
<body>
	

	<?php 
		$nome = $_POST[cmpNome];
		$n1 = $_POST[cmpN1];
		$n2 = $_POST[cmpN2];
		$resul = ($n1 + $n2) /2;

		echo "Nome do aluno:", $nome;

		if ($resul > 8.5) {
			echo "<h3>Sua média foi ", $result ," - MB<\h3>";
		} else if($resul >= 7.5 && $resul < 8.5) {
			echo "<h3>Sua média foi ", $result ," - B<\h3>";
		} else if($resul < 7.5){
			echo "<h3>Burrão / Reprovado<\h3>";
		}
		

	 ?>
</body>
</html>