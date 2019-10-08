<?php 

    include "connection.php";

    $user = $_POST['inputUser'];
    $password = md5($_POST['inputPass']);

    $insert = mysqli_query($connection, "INSERT INTO users( USER, PASSWORD ) values('$user', '$password') ") or die ("Não inserido") ;


?>

 <a href="../read.html"> Funcionando! Consultar --> </a>

