<html>
	<head>
		<title>Editando..</title>
		<meta charset='utf-8'/>
	</head>

	<body>
<?php
    include('conexao.php');

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];
    $id = $_POST['id'];

    echo "Nome: ".$nome."</br>Valor: ".$valor."</br>Cor: ".$cor."</br>Marca: ".$marca."</br></br>";

    $adc = "UPDATE produtos SET nome='$nome', valor='$valor',cor='$cor',marca='$marca' WHERE id='$id'"; 

    $ins = mysqli_query($conectdb,$adc);

    if($ins)
    {
    echo "Produto editado com sucesso! </br><a href='ver.php'>Voltar</a>";

    }
    else
    {
    echo "Erro </br><a href='ver.php'>Voltar</a>";

    }
?>
	</body>
</html>