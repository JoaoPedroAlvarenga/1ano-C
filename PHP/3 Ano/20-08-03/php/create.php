<?php

include_once "./conn.php";

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$birth = filter_input(INPUT_POST, "birth", FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, "rg", FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);
$course = filter_input(INPUT_POST, "course", FILTER_SANITIZE_STRING);
$year = filter_input(INPUT_POST, "year", FILTER_SANITIZE_STRING);
$expedient = filter_input(INPUT_POST, "expedient", FILTER_SANITIZE_STRING);

$sql = "INSERT INTO $table(name, birth, rg, cpf, phone, course, year, expedient) VALUES('$name', '$birth', '$rg', '$cpf', '$phone', '$course', '$year', '$expedient')";

$query = mysqli_query($conn, $sql);

if ($query) {
  header("Location:../index.php");
} else {
  die("Create error: " . mysqli_error($conn));
}
