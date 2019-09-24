<?php 

	$user = "root";
	$passaword = "";
	$database = "loja_banco";
	$connection = mysqli_connect("localhost", $user, $passaword, $database);

	if ($connection) {
		echo "Connection sucessful";
	} else {
		echo "Error";
	}
	
 ?>