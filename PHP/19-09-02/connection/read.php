<?php 
include 'connection.php';
include 'insert.php';

$query = "SELECT * FROM cliente"; 
$slq = mysqli_query($connection, $query ) or die(' Erro na query:' . $query . ' ' . mysql_error() )

while ($row = mysqli_fetch_assoc( $slq )) { 
      print $row["cmpNome"] . " -- " . $row["cmpCpf"];
}

?>