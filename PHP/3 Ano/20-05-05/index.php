<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Oleo+Script+Swash+Caps&family=Roboto&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="background"></div>
  <form method="POST" class="form">
    <label for="puchaseAmount">Valor da compra</label>
    <input type="number" name="puchaseAmount" class="puchaseAmount">

    <label for="paymentMethod">Método de pagamento</label>
    <select name="paymentMethod" class="paymentMethod" id="">
      <option value="vista">A vista</option>
      <option value="debito">Débito</option>
      <option value="credito">Crédito </option>
    </select>

    <button id="btn">Calcular</button>


    <?php

    $puchaseAmount = $_POST['puchaseAmount'];
    $paymentMethod = $_POST['paymentMethod'];

    $discount = array(
      "vista" => 0.1,
      "debito" => 0.05,
      "credito" => 0
    );

    $result =  $puchaseAmount - ($puchaseAmount * $discount[$paymentMethod]);

    if (isset($puchaseAmount) && isset($paymentMethod)) {
      echo '<p class="discountValue">';
      switch ($paymentMethod) {
        case "vista":
          echo 'Desconto de 10% a vista';
          break;

        case "debito":
          echo 'Desconto de 5% no débito';
          break;

        case "credito":
          echo 'Sem desconto no crédito :(';
          break;
      }
      echo '</p>';


      echo '<p class="result"> R$ ', $result, ' </p>';
    } else {
      echo "Valor vazio";
    }

    ?>

  </form>
</body>





</html>
