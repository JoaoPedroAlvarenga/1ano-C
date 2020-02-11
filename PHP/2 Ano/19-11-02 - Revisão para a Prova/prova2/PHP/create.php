<?php
  include_once "connect.php";

  $name = filter_input(INPUT_POST, 'createName', FILTER_SANITIZE_STRING); 
  $mail = filter_input(INPUT_POST, 'createMail', FILTER_SANITIZE_EMAIL);

  $query = "INSERT INTO pessoa(name, mail) VALUES('$name', '$mail')";

  $create = mysqli_query($conn, $query);

  if($create){
    header("Location:../menu.html");
  }else{
    echo("Create Error");
  }

  mysqli_close($conn);

?>
