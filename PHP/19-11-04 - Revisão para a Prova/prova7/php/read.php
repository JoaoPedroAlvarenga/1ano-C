<?php

  include_once "connect.php";

  $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
  $choice = filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_STRING);

  $query = "SELECT * FROM $table WHERE $choice LIKE '%$text%'";

  $read = mysqli_query($conn, $query);


  if(mysqli_num_rows($read) > 0){
    while($row = mysqli_fetch_array($read)){
      echo "<p>";

      echo "Name: ";
      echo $row['name'];

      echo "  |  ";

      echo "Email: ";
      echo $row['mail'];

      echo "</p>";
    }
  }else{
    echo "Nada encontrado";
  }
  
  
  mysqli_close($conn);
  echo "<a href='../create.html'><button>Menu</button></a>";
  
?>