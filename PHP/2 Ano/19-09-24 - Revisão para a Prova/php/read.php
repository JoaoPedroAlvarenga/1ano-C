<?php 

    include "connection.php";
    
    $search = $_POST['inputSearch'];
    $query = "SELECT * FROM users WHERE user = '$search' ";
    
    $read = mysqli_query( $connection, $query ) or die (' Erro na query:' . $query . ' ' . mysql_error() );

    while( $row = mysqli_fetch_array($read) ){
        
        echo "Senha: " . $row['PASSWORD'];
        echo "<br>";
        echo "Usuario: ". $row['USER'];
       

        
    }

?>