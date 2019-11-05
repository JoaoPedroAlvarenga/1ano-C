<?php

  include_once "connect.php";

  $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
  $choice = filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_STRING);
  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

  $query = "UPDATE $table SET $choice=$text WHERE id=$id";

  $update = mysqli_query($conn, $query);

  if($update){
    header('Location:../index.html');
  }else{
    echo "Update error";
  }
  
  mysqli_close($conn);

?>