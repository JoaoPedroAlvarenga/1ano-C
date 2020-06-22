<?php

$hostname="localhost";
$username="joaopedro";
$password="password";
$database="signin";

$table = "person";

$conn = mysqli_connect($hostname, $username, $password, $database);

if(!$conn){
  die('Connect error');
}