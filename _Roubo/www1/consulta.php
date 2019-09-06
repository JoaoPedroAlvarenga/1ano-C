<?php
$servidor='localhost';
$usuario='root';
$senha='';
$banco='mercado';
$link = mysql_connect($servidor,$usuario,$senha);
mysql_select_DB($banco);
?>