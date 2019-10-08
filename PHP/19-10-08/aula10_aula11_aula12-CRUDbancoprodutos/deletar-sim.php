<html>
	<head>
		<title>Deletando</title>
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

    $produto = $_GET['id'];

    echo "Deletando produto de id <b>".$produto."</b></br></br>";

    $query = "DELETE FROM produtos WHERE id = $produto";

    $result = $conectdb->query($query);

    if($result) {
echo "<span class='sucesso'>Deletado com sucesso!</span></br><span><a href='ver.php'>Voltar</a></span>";
} else {
echo "<span class='erro'>Erro</span></br><span><a href='ver.php'>Voltar</a></span>";
}

?>
</body>
</html>