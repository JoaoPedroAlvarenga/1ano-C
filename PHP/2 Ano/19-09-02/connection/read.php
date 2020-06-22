<?php 
    include 'connection.php';
    include 'insert.php';

    $query = "SELECT * FROM users"; 

    $slq = mysqli_query($connection, $query ) or die(' Erro na query:' . $query . ' ' . mysqli_error($query));

    while ($row = mysqli_fetch_assoc( $slq )) { 
        print $row["cmpNome"] . " -- " . $row["cmpCpf"];
    }

?>