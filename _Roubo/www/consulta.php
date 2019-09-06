<?php

include 'conexao.php';

$qry= mysql_query("select * from aluno");
$num_fields = mysql_num_fields($qry);
for($i=0;$i<$num_fields; $i++){
	$fields[] = mysql_field_name($qry,$i);
}

$table = '<table border="1"><tr>';

for($i=0;$i<$num_fields; $i++){
	$table .='<th>'.$fields[$i].'</th>';
}

$table .= '<tbody>';
while($r = mysql_fetch_array($qry)){
	$table .='<tr>';
	for($i=0;$i<$num_fields; $i++){
		$table .= '<td>'.$r[$fields[$i]]. '</td>';
	}
	$table .= '</tr>';
}

$table .= '</tbody> </table>';

echo $table;

?>