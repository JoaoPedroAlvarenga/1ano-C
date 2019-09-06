<?php

$matricula = $_GET["matricula"];
include("conexao.php");
$sql = mysql_query("DELETE FROM aluno WHERE matricula = '$matricula'");
echo '<script language = "javascript">';
echo 'alert ("Registro apagado com sucesso")';
echo '</script>';

echo '
<script language = "javascript">
window.open = history.go(-2);
</script>';
?>