<?php

  include_once "connect.php";

  $name = filter_input(INPUT_POST, 'readName', FILTER_SANITIZE_STRING);

  $query = "SELECT * FROM pessoa WHERE name LIKE '%$name%' ";

  $read = mysqli_query($conn, $query);

  if(mysqli_num_rows($read) > 0){
    while($row = mysqli_fetch_array($read)){
      echo "<p>";
      
      echo "Name: ";
      echo $row['name'];

      echo "  |  ";

      echo "Mail: ";
      echo $row['mail'];

      echo "</p>";
    }
  }else{
    echo "Nada encontrado";
  }

  mysqli_close($conn);
  
?>