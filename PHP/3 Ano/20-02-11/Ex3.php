<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<h1>Loterica</h1>
	<input type="text" name="loterica">
	<input onclick="printNum()" type="submit" name="">
</form>
	<?php
		$loterica = $_POST['loterica'];
		$randomNumber = rand(0,100);
		echo "<h1> Probabilidade de ganhar na $loterica 0.00$randomNumber%";					
	?>
</body>
</html>
