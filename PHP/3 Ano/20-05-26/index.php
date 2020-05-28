<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>
  <aside class="locadora">
    <form action="./php/create.php" method="post">
      <h1>Lo<span>car</span>dora</h1>

      <label for="">Modelo</label>
      <input type="text" name="model" id="model" placeholder="S">

      <label for="">Marca</label>
      <input type="text" name="brand" id="brand" placeholder="Tesla">

      <label for="">Preco</label>
      <input type="text" name="price" id="price" placeholder="50.200">

      <label for="">Ano</label>
      <input type="text" name="year" id="year" placeholder="2017">

      <label for="">Cor</label>
      <input type="text" name="color" id="color" placeholder="Roxo">

      <button type="submit">Cadastrar</button>
    </form>
  </aside>

  <section>
    <h1>Cadastros</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>Modelo</th>
        <th>Marca</th>
        <th>Preco</th>
        <th>Ano</th>
        <th>Cor</th>
      </tr>

      <?php
      include_once "./php/connect.php";
      $query = "SELECT * FROM $table";
      $read = mysqli_query($connect, $query);
  
  
      while ($row = mysqli_fetch_array($read)) {
        echo "<tr>";
  
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['brand'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['carYear'] . "</td>";
        echo "<td>" . $row['color'] . "</td>";
        // echo "<td>" . "<button>Remove</button>" . "</td>";
       

        echo "</tr>";
      }
      ?>
      
    </table>
  </section>


  <script>
    const query = _ => document.querySelector(_);

    function addCars({ model, brand, price, year, color }) {
      query('#model').value = model
      query('#brand').value = brand
      query('#price').value = price
      query('#year').value = year
      query('#color').value = color
    }

    const cars = [
      {
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
</body>

</html>