<?php

  include_once "connect.php";

  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
  $pass = md5(filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING));

  $query = "INSERT INTO $table(name, mail, pass) VALUES('$name', '$mail', '$pass')";

  $create = mysqli_query($conn, $query);

  if($create){
    header("Location:../create.html");

  }else{
    echo "Create Error";
  }

  mysqli_close($conn);
  
?>