<?php
  include_once "connect.php";

  $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
  $edit = filter_input(INPUT_POST, 'edit', FILTER_SANITIZE_STRING);
  $choice = filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_STRING);

  $sql = "UPDATE users SET $choice='$edit' WHERE id=$id ";

  $update = mysqli_query($connect, $sql);

  if (!$update) {
    echo "Error updating record: " . mysqli_error($connect);
} 

mysqli_close($connect);
header("Location:../menu.html")
?>