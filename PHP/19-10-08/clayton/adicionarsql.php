<html>
	<head>
		<title>Adicionando..</title>
		<meta charset='utf-8'/>
	</head>

	<body>
<?php
    include('connect.php');

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $cor = $_POST['cor'];
    $marca = $_POST['marca'];

    echo "Nome: ".$nome."</br>Valor: ".$valor."</br>Cor: ".$cor."</br>Marca: ".$marca."</br></br>";

    $adc = "INSERT INTO produtos(nome,valor,cor,marca) VALUES('".$nome."','".$valor."','".$cor."','".$marca."')"; 

    $ins = mysqli_query($conectdb,$adc);

    if($ins)
    {
    echo "Produto adicionado com sucesso! </br><a href='index.html'>Voltar</a>";

    }
    else
    {
    echo "Erro </br><a href='adicionar.php'>Voltar</a>";

    }
?>
	</body>
</html>