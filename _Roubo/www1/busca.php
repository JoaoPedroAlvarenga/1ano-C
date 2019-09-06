<?php
if (isset($_POST["preco"]))
$preco = $_POST["preco"];
include 'consulta.php';
if (empty($codigo)) {
$sql = "SELECT * FROM produto";
}
else {
$sql = "SELECT * FROM produto WHERE preco like '$preco'";
}
sleep(1);
$result = mysql_query($sql);
$cont = mysql_affected_rows($link);
if ($cont > 0) {
echo "</center>";
$tabela = "<center><table border='1'> <thead> <tr><th>preco</th> <th>produto</th>
</tr> </thead> <tbody> <tr>";
$return = "$tabela";
while ($linha = mysql_fetch_array($result)) {
$return.= "<td>" . utf8_encode($linha["preco"]) . "</td>";
$return.= "<td>" . utf8_encode($linha["produto"]) . "</td>";
$return.="</tr>"; }
echo $return.="</tbody></table>";
echo "<BR><Br>";
echo "<a href='deletar.php?codigo=$preco'>deletar registro </a>";
}
else {
echo "nao encontrado";
}
?>



