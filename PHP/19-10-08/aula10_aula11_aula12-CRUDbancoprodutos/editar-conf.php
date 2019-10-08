<html>
	<head>
		<title>Editando..</title>
		<meta charset='utf-8'/>
	</head>

	<body>
<?php
    include('connect.php');

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
    echo "<b style='color:green'>Produto editado com sucesso!</b> </br><a href='ver.php'>Voltar</a>";

    }
    else
    {
    echo "Erro </br><a href='ver.php'>Voltar</a>";

    }
?>
	</body>
</html>