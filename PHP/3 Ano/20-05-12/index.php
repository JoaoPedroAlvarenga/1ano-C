<?php

  function verifyWeekDays($day)
  {
    $daysNames = array(
      1 => "Domingo",
      2 => "Segunda",
      3 => "Terca",
      4 => "Quarta",
      5 => "Quinta",
      6 => "Sexta",
      7 => "Sábado",

    );

    switch ($day) {
      case 0:
        echo "Dia: $day\n";
        echo "dia inválido";
        break;

      case $day >= 2 && $day <= 6:
        echo "Dia: $day ($daysNames[$day]) \n";
        echo "Dia útil\n";
        break;

      case  $day == 1 || $day == 7:
        echo "Dia: $day ($daysNames[$day])\n";
        echo "Fim de semana\n";
        break;

      default:
        echo "Dia: $day\n";
        echo "dia inválido";
        break;
    }
    echo "\n\n";
  }

  for ($i = -1; $i < 9; $i++) {
    verifyWeekDays($i);
  }

?>
