<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "nubank";

    try {
        $connection = mysqli_connect($hostname, $username, $password, $database);
        echo("Connection True");
    } catch (\Throwable $th) {
        echo("Connection Error");
    }

?>