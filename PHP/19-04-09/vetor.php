<?php
$nomes = array('Jos�','Maria','Jorge','Tiago');
$nomes[]="Manoel";
$nomes[]="Laura";
$nomes[]="Jo�o";
foreach($nomes as $i => $n)
{
echo "O elemento(�ndice) $i tem o valor $n <br>";
} 
echo "___________________________________________________ <br>"; //separa��o de linhas
$status = array(10 => 'Novo',
                20 => 'Pago',
                30 => 'Envio',
                40 => 'Entrega',
                50 => 'Fechado');
$qs = count($status);
for ($n=1; $n <= $qs; $n++)
{
 $i = $n * 10;
 echo $status[$i]."<br>";
}                 
?>

