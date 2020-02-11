<?php

  include_once "connect.php";

  $choice = filter_input(INPUT_POST, 'html', FILTER_SANITIZE_STRING );
  $text = filter_input(INPUT_POST, 'html', FILTER_SANITIZE_STRING );
  $id = filter_input(INPUT_POST, 'html', FILTER_SANITIZE_NUMBER_INT );

  $query = "UPDATE $table SET $choice='$text' WHERE id=$id";

  $update = mysqli_query($conn, $query);

  if($update){
    header('Location:../index.html');
  }else{
    echo "Update Error";
  }

  mysqli_close($conn);




?>


