<?php

  $conn = mysqli_connect('localhost', 'root', '', 'phprova');

  if(!$conn){
    die("Connect Error: ". mysqli_connect_error());
  }

?>