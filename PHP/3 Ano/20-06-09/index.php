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
      <label for="">Name</label>
      <input type="text" name="name" id="name" placeholder="Seu nome" required>

      <label for="">Telefone</label>
      <input type="text" name="phone" id="phone" placeholder="(21) 99999-9999" required>

      <label for="">CPF</label>
      <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" required maxlength="11">

      <label for="">Email</label>
      <input type="mail" name="mail" id="mail" placeholder="Roxo" required>

      <button type="submit">Cadastrar</button>
    </form>
  </aside>

  <section>
    <h1>Cadastros</h1>

    <form class="search-section" action="" method="post">
      <select name="options" id="">
        <option value="cpf">CPF</option>
        <option value="name">Name</option>
        <option value="phone">Telefone</option>
        <option value="mail">Email</option>
      </select>
      <input type="text" name="search">
      <button><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>

    <?php
    include_once "./php/connect.php";
    $searchText = $_POST['search'];
    $options = $_POST['options'];

    // TODO: Arrumar está coisa horrivel depois
    if (isset($options)) {
      $sqlRead = "SELECT * FROM $table WHERE $options LIKE '$searchText%';";
      $sqlCount =  "SELECT COUNT(*) as total FROM $table WHERE $options LIKE '$searchText%';";
    } else {
      $sqlRead = "SELECT *  FROM $table";
      $sqlCount =  "SELECT COUNT(*) as total FROM $table";
    }

    $queryRead = mysqli_query($connect, $sqlRead);
    $queryCount = mysqli_query($connect, $sqlCount);

    $searchTotal = mysqli_fetch_assoc($queryCount)['total'];
    echo "<p class='query'>$searchTotal resultados encontrados</p>";
    // echo "<p class='query'>$sqlRead </p>";
    // echo "<p class='query'>$sqlCount </p>";
    $searchData = [];
    if ($queryRead->num_rows > 0) {
      while ($row = mysqli_fetch_assoc($queryRead)) {
        $searchData[] = $row;
      }
    } else {
      echo "Nada encontrado";
    }
    ?>
    <table>
      <thead>
        <th>Código</th>
        <th>Name</th>
        <th>Telefone</th>
        <th>CPF</th>
        <th>Email</th>
        <th></th>
      </thead>
      <tbody>
        <?php foreach ($searchData as $value) : ?>
          <tr>
            <td><?= $value['id'] ?> </td>
            <td><?= $value['name'] ?> </td>
            <td><?= $value['phone'] ?> </td>
            <td><?= $value['cpf'] ?> </td>
            <td><?= $value['mail'] ?> </td>
            <td><a class='btn-delete' href='./php/delete.php?id=<?= $value['id'] ?>'><i class='fas fa-trash'></i></a></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </section>

</body>
<script src="./js/addInput.js"></script>
<script src="./js/data.js"></script>
<script src="https://kit.fontawesome.com/1e26d1774e.js" crossorigin="anonymous"></script>

</html>