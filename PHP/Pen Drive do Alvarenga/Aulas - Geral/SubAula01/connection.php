<?php
include 'conexao.php';
$ = mysql_query("select * from produto");
//Pegando os nomes dos campos
$num_fiels = mysql_num_fields($qry);//Obtém o número de campos o resultado
for($i = 0;$i<$num_fields; $i++){//Pega o nome dos campos
    $fields[] = mysql_field_name($qry,$i);
}
//Montando o cabeçalho da tabela
$table = '<table border="1"><tr>';

for($i = 0;$i<$num_fields; $i++){
$table .='<th>'.$fields[$i].'</th>';
}

//montando o corpo da tabela
$table.= '<body>';
while($r = msql_fetch_array($qry)){
    $table .='<tr>';
    for($i = 0;$i<$num_fields; $i++){	
	$table.='<td>'.$r($fields($i)).'</td>';
	}
	$table.='</tr>';
}
//finalizando a tabela
$table.='</body></table>';
// imprimindo a tabela
echo $table;
?>
	