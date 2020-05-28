<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table style="width:70%">
    <tr>
      <th>ID</th>
      <th>Modelo</th>
      <th>Marca</th>
      <th>Preco</th>
      <th>Ano</th>
      <th>Cor</th>
    </tr>


    <?php

    include_once "connect.php";
    $query = "SELECT * FROM $table";
    $read = mysqli_query($connect, $query);

    if (mysqli_num_rows($read) > 0) {
      while ($row = mysqli_fetch_array($read)) {
        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['brand'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['carYear'] . "</td>";
        echo "<td>" . $row['color'] . "</td>";

        echo "</tr>";
      }
    } else {
      echo "erro";
    }

    ?>

  </table>
</body>

</html>