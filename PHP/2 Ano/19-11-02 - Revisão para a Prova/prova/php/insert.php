<?php

  include_once "connect.php";

  $name =     filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $pass = md5(filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING));
  $mail =     filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
  $numb =     filter_input(INPUT_POST, 'numb', FILTER_SANITIZE_NUMBER_INT);

  $query = "INSERT INTO users(name, pass, mail, numb) VALUES('$name', '$pass', '$mail', '$numb')";

  $insert = mysqli_query($connect, $query);

  if($insert){
    header("Location:../menu.html");
  }else{
    echo ("Insert Error: ");
  }

  mysqli_close($connect);

?>
  
 