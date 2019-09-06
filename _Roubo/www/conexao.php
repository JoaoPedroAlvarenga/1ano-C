<?php
$servidor='localhost';
$usuario='root';
$senha='';
$banco='escola';

$link = mysql_connect ($servidor,$usuario,$senha) or die('Não foi possível conectar' . mysql_error());
mysql_select_db($banco) or die ('Não pôde selecionar o banco de dados');
	
?>