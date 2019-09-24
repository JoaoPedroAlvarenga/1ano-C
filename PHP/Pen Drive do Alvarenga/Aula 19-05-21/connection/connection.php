<?php 

$user = "root";
$password = "";
$banco = "loja";
$connection = mysql_connect('localhost', $user, $password, $banco);

if (!$connection) {
	echo "<h1>Error</h1>";
} else {
	echo "<h1>Connection sucessful</h1>";
}

 ?>