<?php
  include_once "connect.php";

  $name = filter_input(INPUT_POST, 'createName', FILTER_SANITIZE_STRING);
  $mail = filter_input(INPUT_POST, 'createMail', FILTER_SANITIZE_EMAIL);
  $pass = md5(filter_input(INPUT_POST, 'createPass', FILTER_SANITIZE_STRING));
  $estado = filter_input(INPUT_POST, 'createEstado', FILTER_SANITIZE_STRING);
  $sexo = filter_input(INPUT_POST, 'createSexo', FILTER_SANITIZE_STRING);


  $query = "INSERT INTO $table(name, mail, pass, estado, sexo) VALUES('$name', '$mail', '$pass', '$estado', '$sexo') ";

  $create = mysqli_query($conn, $query);

  if($create){
    header("Location:../index.html");
  }else{
    echo "<p>" . "Name: " . $name. "<br><br></p>" ;
    echo "<p>" . "Email: " . $mail. "<br><br></p>" ;
    echo "<p>" . "Senha: " . $pass. "<br><br></p>" ;
    echo "<p>" . "Estado: " . $estado. "<br><br></p>" ;
    echo "<p>" . "Sexo: " . $sexo. "<br><br></p>" ;
    echo "<p> ------------  <br><br></p>" ;
    echo "Create Error";
  }

  mysqli_close($conn);
?>