<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  label {
    margin: 10px;
  }

  button {
    margin-top: 20px;
  }

  .container {
    height: 100vw;
    display: flex;
    align-items: center;
    flex-direction: column;

  }

  #mostarNumeros {

  }
</style>

<body>

  <div class="container">

    <label for="name">Nome</label>
    <input type="text" id="name" value="Pedro">

    <label for="name">Quantidade de vezes</label>
    <input type="number" id="number" value="10">


    <button id="btn">Mostrar</button>
    <div id="mostarNumeros"></div>

  </div>

  <?php
    $name = $_POST('#name');
    $number = $_POST('#number');
    $btn = $_POST('#btn');

    echo($name)


  ?>


</body>

</html>