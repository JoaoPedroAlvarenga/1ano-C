<?php
    include_once "connection.php";

    $search = filter_input(INPUT_POST, 'inputSearch', FILTER_SANITIZE_STRING);

    $query = "SELECT * FROM cliente WHERE name LIKE '%$search%'";
    $read = mysqli_query($connection, $query);

    while($i = mysqli_fetch_array($read)){
        echo "<h2>"."Name: ". $i['name']."</h2>";
    }

?>