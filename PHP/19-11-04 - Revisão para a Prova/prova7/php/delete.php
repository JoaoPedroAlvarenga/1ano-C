<?php

  include_once "connect.php";

  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

  $query = "DELETE FROM $table WHERE id=$id";

  $delete = mysqli_query($conn, $query);

  if($delete){
    header("Location:../delete.html");

  }else{
    echo "Create Error";
  }

  mysqli_close($conn);
  
?>