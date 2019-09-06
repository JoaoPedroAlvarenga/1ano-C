<?php
include 'consulta.php';
$produto = $_POST[produto];
$preco = $_POST[preco];
$marca = $_POST[marca];
$setor = $_POST[setor];

$sql = mysql_query ("insert into produto values ('$produto','$preco','$marca','$setor')");
if ($sql) {
echo "cadastro ok";}
else{
echo "nao cadastrado";}
?>