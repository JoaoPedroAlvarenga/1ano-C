<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php

  include_once "connect.php";

  $search = filter_input(INPUT_POST, 'search', FILTER_SANITIZE_STRING);
  $choice = filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_STRING);

  $query = "SELECT * FROM users WHERE $choice LIKE '%$search%'";

  $read = mysqli_query($connect, $query);

  while ($i = mysqli_fetch_array($read)) {
    echo "<p style='font-size: 3em' >";
    echo "id: " . $i['id'] . "<span style='font-weight: bold;  color: rgb(105, 32, 139)'> | </span>";
    echo "Nome: " . $i['name'] . "<span style='font-weight: bold;  color: rgb(105, 32, 139)'> | </span>";
    echo "Email: " . $i['mail'] . "<span style='font-weight: bold;  color: rgb(105, 32, 139)'> | </span>";
    echo "Idade: " . $i['numb'] . " anos ";
    echo "</p>";
  }
  echo  "<a href='../menu.html'> <button> Menu </button> </a>";

  mysqli_close($connect);

  ?>

  
</body>

</html>