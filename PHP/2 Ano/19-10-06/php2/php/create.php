<?php
    include_once "connection.php";

    $name = filter_input(INPUT_POST, "inputName", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "inputMail", FILTER_SANITIZE_EMAIL);

    $query = " INSERT INTO cliente(name, email) VALUES('$name','$email')";
    $create = mysqli_query($connection, $query);

    header("Location:../create.html");
?>