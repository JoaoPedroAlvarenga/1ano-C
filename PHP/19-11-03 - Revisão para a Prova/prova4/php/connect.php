<?php

  $hostname = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'phprova';
  $table = 'usuario';

  $conn = mysqli_connect($hostname, $username, $password, $database);

  if(!$conn){
    die("Erro na conexão: " . mysqli_connect_error());
  }

?>