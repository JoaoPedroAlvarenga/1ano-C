<html>
	<head>
		<title>Deletando</title>
		<meta charset='utf-8'/>

  
	</head>

	<body>
<?php
    include('conexao.php');

    $produto = $_GET['id'];

    echo "Deletando produto de id <b>".$produto."</b></br></br>";

    $query = "DELETE FROM produtos WHERE id = $produto";

    $result = $conectdb->query($query);

    if($result) {
echo "Deletado com sucesso!</br><a href='ver.php'>Voltar</a>";
} else {
echo "Erro</br><a href='ver.php'>Voltar</a>";
}

?>
</body>
</html>