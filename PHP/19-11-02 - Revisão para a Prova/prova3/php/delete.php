<?php

  include_once "connect.php";

  $id = filter_input(INPUT_POST, 'deleteId', FILTER_SANITIZE_NUMBER_INT );

  $query = "DELETE FROM pessoa WHERE id=$id";

  $delete = mysqli_query($conn, $query);

  if($delete){
    header("Location:../menu.html");
  }else{
    echo "Delete Error";
  }


  mysqli_close($conn);



?>