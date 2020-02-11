<?php
    include_once 'connection.php';

    $name = $_POST['inputName'];
    $mail = $_POST['inputMail'];
    $pass = md5($_POST['inputPass']);

    $query = "INSERT INTO users(NAME, MAIL, PASS) VALUES('$name', '$mail', '$pass')";

    $insert = mysqli_query($connection, $query) or die ('Insert Error'); 

?>