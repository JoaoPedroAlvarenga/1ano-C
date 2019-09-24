<?php 

    $database = "dbUsuarios";
    $userDb = "root";
    $passwordDb = "";
    $hostname = "localhost";
    
    $connection = mysqli_connect($hostname, $userDb, $passwordDb, $database) or die ('Erro na conexão');

?>