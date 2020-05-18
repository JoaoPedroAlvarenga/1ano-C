<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="images">
    <img class="img1" src="./assets/php.png" alt="bestphp">
    <img class="img2" src="./assets/php.png" alt="bestphp">
  </div>


  <h1>Calculadora PHP</h1>
  <div class="calc">
    <form method="post">
      <div class="input-values">
        <input type="text" name="value1" placeholder="Valor 1">
        <input type="text" name="value2" placeholder="Valor 2">
      </div>
      <select name="option" id="">
        <option value="addition">( + ) Adição</option>
        <option value="subtraction">( - ) Subtração</option>
        <option value="multiplication">( * ) Multiplicação</option>
        <option value="division">( / ) Divisão</option>
        <option value="module">( % ) Módulo</option>
        <option value="exponentiation">( ** ) Exponencial</option>
      </select>

      <button class="btn-calc">Calcular</button>
      <?php
      $valueOne = $_POST['value1'];
      $valueTwo = $_POST['value2'];
      $option = $_POST['option'];

      $operators  = array(
        "addition" =>  fn ($valueOne, $valueTwo) => $valueOne + $valueTwo,
        "subtraction" =>  fn ($valueOne, $valueTwo) => $valueOne - $valueTwo,
        "multiplication" =>  fn ($valueOne, $valueTwo) => $valueOne * $valueTwo,
        "division" =>  fn ($valueOne, $valueTwo) => $valueOne / $valueTwo,
        "module" =>  fn ($valueOne, $valueTwo) => $valueOne % $valueTwo,
        "exponentiation" =>  fn ($valueOne, $valueTwo) => $valueOne ** $valueTwo
      );

      echo '<h2 class="resul">',  $operators[$option]($valueOne, $valueTwo), '</h2>';
      ?>
    </form>
  </div>

</body>


</html>