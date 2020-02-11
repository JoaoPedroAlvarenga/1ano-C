<?php
    session_start();
    include_once 'connection.php';

    $name = filter_input(INPUT_POST, 'inputName', FILTER_SANITIZE_SPECIAL_CHARS);
    $mail = filter_input(INPUT_POST, 'inputMail', FILTER_SANITIZE_EMAIL);
    $pass = md5(filter_input(INPUT_POST, 'inputPass', FILTER_SANITIZE_SPECIAL_CHARS));

    $querySelect = $link->query("SELECT EMAIL FROM users");
    $array_email = [];

    while($mail = $querySelect->fetch_assoc()){
        $mailTable = $mail['MAIL'];
        array_push($array_email, $mailTable);
    }

    if (in_array($mail, $array_email)) {
        $_SESSION['msn'] = "<p class = 'center red-text'>". "Email ja cadastrado" ."</p>";
        header("Location:../");
    } else {
        # code...
    }
    

?>