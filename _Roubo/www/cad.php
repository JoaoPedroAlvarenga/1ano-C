<?php 
include 'conexao.php';
$matricula = $_POST[matricula];
$nome = $_POST[nome];
$turma = $_POST[turma];
$turno = $_POST[turno];
$curso = $_POST[curso];

$Sql= Mysql_Query ("insert into aluno values ('$matricula','$nome','$turma','$turno','$curso')");
If ($Sql) {
echo "cadastro ok";}
else {
echo "não cadastrado";}
?>