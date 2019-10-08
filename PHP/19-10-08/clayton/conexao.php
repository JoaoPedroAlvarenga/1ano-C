<?php
    $conectdb = new mysqli('localhost', 'root', '', 'bancoprodutos');
   
    if (!$conectdb) {
        die("Não foi possível conectar: " . mysqli_error()."<br>");
    }