<?php

  include_once "connect.php";

  $user = filter_input(INPUT_POST, 'createName', FILTER_SANITIZE_STRING);
  $mail = filter_input(INPUT_POST, 'createMail', FILTER_SANITIZE_EMAIL);
  $pass = md5(filter_input(INPUT_POST, 'createPass', FILTER_SANITIZE_STRING));


  $query = "INSERT INTO pessoa(user, mail, pass) VALUE('$user', '$mail', '$pass')";

  $create =  mysqli_query($conn, $query);

  if($create){
    header("Location:../menu.html");
  }else{
    echo("Create Error");
  }

  mysqli_close($conn);
?>