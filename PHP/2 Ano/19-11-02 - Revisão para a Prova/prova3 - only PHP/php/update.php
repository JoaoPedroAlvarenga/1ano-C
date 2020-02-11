<?php

  include_once "connect.php";

  $choice = filter_input(INPUT_POST, 'updateChoice', FILTER_SANITIZE_STRING);
  $text = filter_input(INPUT_POST, 'updateText', FILTER_SANITIZE_STRING);
  $id   = filter_input(INPUT_POST, 'updateId'  , FILTER_SANITIZE_NUMBER_INT);

  $query = "UPDATE pessoa SET name='$text' WHERE id=$id";

  $update = mysqli_query($conn, $query);

  if($update){
    header("Location:../menu.html");
  }else{
    echo "Update Error";
  }

  mysqli_close($conn);

?>