<?php 
$codigo = $_POST["codigo"];
include 'conexao.php';
if (empty($codigo)) { 
$sql = "SELECT * FROM produto";
} 
  else {
$sql = "SELECT * FROM produto WHERE codigo like '$codigo'";
 } 
sleep(1); 
$result = mysql_query($sql); 
$cont =mysql_affected_rows($link); 
 if ($cont > 0) { 
echo "</center>";
$tabela = "<center><table border='1'> <thead> <tr><th>Codigo</th>
 <th>Produto</th></tr> </thead> <tbody> <tr>"; 
$return = "$tabela"; 
while ($linha = mysql_fetch_array($result)) { 
$return.= "<td>" . utf8_encode($linha["nome"]) . "</td>"; 
$return.= "<td>" . utf8_encode($linha["turma"]) . "</td>"; 
 $return.= "</tr>"; }
echo $return.="</tbody></table>"; 
echo "<BR><Br>";
}
else { 
  echo "não encontrado"; 
 }  
?>