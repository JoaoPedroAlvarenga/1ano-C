<?php

  include_once "connect.php";

  $text = filter_input(INPUT_POST, 'readText', FILTER_SANITIZE_STRING);
  $choice = filter_input(INPUT_POST, 'readChoice', FILTER_SANITIZE_STRING);

  $query = "SELECT * FROM $table WHERE $choice LIKE '%$text%'";

  $read = mysqli_query($conn, $query);
 
  if(mysqli_num_rows($read) > 0){
    while ($row = mysqli_fetch_array($read)){
      echo "<p>";

      echo "Name: ";
      echo $row['name'];

      echo "  |  ";

      echo "Mail: ";
      echo $row['mail'];

      echo "  |  ";

      echo "Estado: ";
      echo $row['estado'];

      echo "  |  ";

      echo "Sexo: ";
      echo $row['sexo'];

      echo "</p>";
    }
  }else{
    echo "<p>" . "SELECT * FROM $table WHERE $choice LIKE '%$text%'" . "</p>";
    echo "<p>" . "Text: " . $text. "<br><br></p>";
    echo "<p>" . "Escolha: " . $choice. "<br><br></p>";
    echo "Nada encontrado";
  }

  mysqli_close($conn)
?>