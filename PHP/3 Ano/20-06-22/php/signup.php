<?php

include_once "connect.php";

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];

$sql = "INSERT INTO $table(name, login, password) VALUES('$name', '$login', '$password') ";

$query = mysqli_query($conn, $sql);

if($query){
  header("Location:../index.html");
}