<?php 

if (isset($_POST["matricula"])) 
$matricula = $_POST["matricula"];
include 'conexao.php';

if (empty($matricula)) { 
$sql = "SELECT * FROM aluno";
} 
  else {

$sql = "SELECT * FROM aluno WHERE matricula like '$matricula'";
 
 } 
sleep(1); 
$result = mysql_query($sql); 
$cont = mysql_affected_rows($link); 
// Verifica se a consulta retornou linhas 
 if ($cont > 0) { 
// Atribui o c�digo HTML para montar uma tabela 
echo "</center>";
// fim
$tabela = "<center><table border='1'> <thead> <tr><th>matricula</th> <th>nome</th> 
</tr> </thead> <tbody> <tr>"; 
$return = "$tabela"; 
// Captura os dados da consulta e inseri na tabela HTML 
while ($linha = mysql_fetch_array($result)) { 
$return.= "<td>" . utf8_encode($linha["matricula"]) . "</td>"; 
$return.= "<td>" . utf8_encode($linha["nome"]) . "</td>"; 
 $return.= "</tr>"; }
echo $return.="</tbody></table>"; 
echo "<BR><Br>";

echo "<a href = 'deletar.php? matricula=$matricula'>Deletar registro </a>";
}
 else { 
// Se a consulta n�o retornar nenhum valor, exibe mensagem para o usu�rio 
  echo "não encontrado"; 
  
 }  

?>