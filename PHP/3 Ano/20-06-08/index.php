<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <title>Locardora</title>
</head>

<body>
  <aside class="locadora">
    <form action="./php/create.php" method="post">
      <h1>Lo<span>car</span>dora</h1>

      <label for="">Modelo</label>
      <input type="text" name="model" id="model" placeholder="S" required>

      <label for="">Marca</label>
      <input type="text" name="brand" id="brand" placeholder="Tesla" required>

      <label for="">Preco</label>
      <input type="number" name="price" id="price" placeholder="50.200" required step="0.001">

      <label for="">Ano</label>
      <input type="number" name="year" id="year" placeholder="2017" required min="1769" max="2022">

      <label for="">Cor</label>
      <input type="text" name="color" id="color" placeholder="Roxo" required>

      <button type="submit">Cadastrar</button>
    </form>
  </aside>

  <section>
    <h1>Cadastros</h1>

    <form class="search-section" action="" method="post">
      <select name="options" id="">
        <option value="brand">Marca</option>
        <option value="id">Código</option>
        <option value="model">Modelo</option>
        <option value="price">Preco</option>
        <option value="carYear">Ano</option>
        <option value="color">Cor</option>
      </select>
      <input type="text" name="search">
      <button><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>

    <table>
      <tr>
        <th>Código</th>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Preco</th>
        <th>Ano</th>
        <th>Cor</th>
        <th></th>
      </tr>

      <?php
      include_once "./php/connect.php";
      $searchText = $_POST['search'];
      $options = $_POST['options'];

      // TODO: Arrumar está coisa horrivel depois
      if (isset($options)) {
        if ($options == "id" || $options == "price" || $options == "carYear") {
          $sqlRead = "SELECT * FROM $table WHERE $options LIKE '$searchText';";
          $sqlCount =  "SELECT COUNT(*) as total FROM $table WHERE $options LIKE '$searchText';";
        } else {
          $sqlRead = "SELECT * FROM $table WHERE $options LIKE '$searchText%';";
          $sqlCount =  "SELECT COUNT(*) as total FROM $table WHERE $options LIKE '$searchText%';";
        }
      } else {
        $sqlRead = "SELECT * FROM $table FROM $table";
        $sqlCount =  "SELECT COUNT(*) as total FROM $table";
      }

      $queryRead = mysqli_query($connect, $sqlRead);
      $queryCount = mysqli_query($connect, $sqlCount);

      $searchTotal = mysqli_fetch_assoc($queryCount)['total'];
      echo "<p class='query'>$searchTotal encontrados</p>";

      while ($row = mysqli_fetch_array($queryRead)) {
        $id = $row['id'];
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['brand'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['carYear'] . "</td>";
        echo "<td>" . $row['color'] . "</td>";
        echo  "<td><a class='btn-delete' href='./php/delete.php?id=$id'><i class='fas fa-trash'></i></a> </td>";
        echo "</tr>";
      }
      ?>

    </table>
  </section>



</body>
<script>
  const query = _ => document.querySelector(_);

  function addCars({
    model,
    brand,
    price,
    year,
    color
  }) {
    query('#model').value = model
    query('#brand').value = brand
    query('#price').value = price
    query('#year').value = year
    query('#color').value = color
  }

  const cars = [{
      model: "X",
      brand: "Tesla",
      price: "50.000",
      year: "2020",
      color: "Roxo"
    },
    {
      model: "Y",
      brand: "Honda",
      price: "80.000",
      year: "2019",
      color: "Vermelho"
    },
    {
      model: "Z",
      brand: "Ford",
      price: "100.000",
      year: "2018",
      color: "Azul"
    }
  ]

  addCars(cars[2])
</script>
<script src="https://kit.fontawesome.com/1e26d1774e.js" crossorigin="anonymous"></script>

</html>