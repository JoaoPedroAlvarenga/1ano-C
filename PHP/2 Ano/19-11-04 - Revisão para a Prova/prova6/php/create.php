<?php

  include_once "connect.php";

  $mail  = filter_input(INPUT_POST, 'createEmail', FILTER_SANITIZE_STRING);
  $pass   = filter_input(INPUT_POST, 'createPass' , FILTER_SANITIZE_EMAIL);

  $query = "INSERT INTO $table(mail , pass) VALUES('$mail', '$pass')";

  $create = mysqli_query($conn, $query);

  if($create){
    header('Location:../index.html');
  }else{
    echo "Create Error";
  }

  mysqli_close($conn);
?>