<?php
$codigo=$_GET["codigo"];
include("consulta.php");
$sql=mysql_query("DELETE FROM produto WHERE codigo='$codigo'");
echo '<script language="javascript">';
echo 'alert("registro apagado com sucesso")';
echo '</script>';

echo '
<script language="javascript">
window.open=history.go(-2);
</script>';
?>
