<?php
	$numero = $_POST["numero"];
	
	echo("Tabuada  <br>");

	for ($i=0; $i<=10; $i++) {
		@$r = $i * $numero;
		echo "$i X $numero = $r <br>";

		
		
	}
?>	