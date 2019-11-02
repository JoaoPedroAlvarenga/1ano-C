<?php

  include_once "connect.php";

  $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);

  $sql = "DELETE FROM users WHERE id = '$search'";

  $delete = mysqli_query($connect, $sql);

  if($delete){
    header("Location:../menu.html");
  }else{
    echo ("Delete Error");
  }


  mysqli_close($connect);

?>