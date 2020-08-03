<?php
$hostname = "localhost";
$username = "joaopedro";
$password = "password";
$database = "escola";
$table = "aluno";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Connect Error");
