<?php
	echo "<h1>Resultado </h1><hr><br>";
	$n = $_POST["numero"];

	if ($n % 2 == 0) {
		echo "$n eh um numero par";
		
	}else{
		echo "$n eh um numero impar";
	}

?>