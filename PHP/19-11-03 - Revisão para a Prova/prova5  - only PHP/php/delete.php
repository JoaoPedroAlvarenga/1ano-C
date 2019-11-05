<?php

  include_once "connect.php";

  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

  $query = "DELETE FROM $table WHERE id=$id";

  $delete = mysqli_query($conn, $query);

  if($delete){
    header('Location:../index.html');
  }else{
    echo "Delete error";
  }
  
  mysqli_close($conn);

?>