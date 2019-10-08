<html>
	<head>
		<title>Produtos</title>
		<meta charset='utf-8'/>

  <style>
    body{
      font-family:sans-serif;
    }
    .id{
      min-width: 50px!important;
    }
    .nome{
      min-width: 250px;
    }
    span{
      min-width: 150px;
      display: table-cell;
    }
    .sucesso{
      color:green;
    }
    .erro{
      color:red;
    }
    .rodando{
      padding: 5px 10px;
      background-color: #eee;
      border:1px solid #ccc;
    }
  </style>
	</head>

	<body>

<?php
    include('connect.php');

    $produto = $_POST['produto'];

    echo "Pesquisa por: <b>".$produto."</b></br></br>";

    $query ="SELECT * FROM produtos WHERE nome LIKE '%$produto%'";
    
    $result = $conectdb->query($query);
 

    if ($result->num_rows > 0) {
            echo "<span class='id'><b>Id</b></span><span class='nome'><b>Nome</b></span><span><b>Cor</b></span><span><b>Marca</b></span><span><b>Valor</b></span><span><b>Opções</b></span><br>";
        while($row = $result->fetch_assoc()) {
            echo "<span class='id'>".$row["id"]."</span><span class='nome'>".$row["nome"]."</span><span>".$row["cor"]."</span><span>".$row["marca"]."</span><span>".$row["valor"]."</span><span><a href='deletar.php?id=".$row["id"]."'>Deletar</a></span><span><a href='editar.php?id=".$row["id"]."'>Editar</a></span><br>";
        }
    } else {
        echo "<b class='erro'>Sem resultados para mostrar</b><br><br>";
    }
echo "</br><span><a href='ver.php'>Voltar</a></span>";
?>
        </body>
</html>