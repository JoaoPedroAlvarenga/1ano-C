<?php

include_once "connect.php";

$name =  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$mail = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);



$sql = "INSERT INTO $table(name, phone, cpf, mail) VALUES('$name', '$phone', '$cpf', '$mail')";

$create = mysqli_query($connect, $sql);

if ($create) {
  header("Location:../index.php");
} else {

  echo  $name . "<br/>";
  echo  $phone . "<br/>";
  echo  $cpf . "<br/>";
  echo  $mail . "<br/>";

  echo "Create error <br><br>" . mysqli_error($connect);
}

mysqli_close($connect);
