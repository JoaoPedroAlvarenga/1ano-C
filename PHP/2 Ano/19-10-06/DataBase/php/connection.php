<?php
    $utf8 = header("Content Type: text/html; chatset=utf8");

    // $hostname = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "nubank";

    // $connection = mysqli_connect($hostname, $username, $password, $database) or die ("Connection Error");

    $link = new mysqli('localhost', 'root', '', 'nubank' );
    $link -> set_charset('utf8');


?>