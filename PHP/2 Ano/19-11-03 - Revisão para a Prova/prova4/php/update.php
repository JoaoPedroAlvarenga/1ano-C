<?php

  include_once "connect.php";

  $id = filter_input(INPUT_POST, 'updateId', FILTER_SANITIZE_NUMBER_INT);
  $text = filter_input(INPUT_POST, 'updateText', FILTER_SANITIZE_STRING);
  $choice  = filter_input(INPUT_POST, 'updateChoice', FILTER_SANITIZE_STRING);

  $query = "UPDATE $table SET $choice='$text' WHERE id=$id";

  $update = mysqli_query($conn, $query);

  if($update){
    header("Location:../index.html");
  }else{
    echo "Update error";
  }

  mysqli_close($conn);

?>