<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<?php
    include "connection.php";

    $search = $_POST['inputName'];
    $choice = $_POST['inputChoice'];

    $query = "SELECT * FROM users WHERE $choice LIKE '%$search%'";

    $read = mysqli_query($connection, $query) or die("Read Error");

    while($i = mysqli_fetch_array($read)){
        echo "<p>". $choice.": ". $i[$choice] ."</p>" ;
    }
?>
</body>
</html>