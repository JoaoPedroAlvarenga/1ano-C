<html>
	<head>
		<title>Editar</title>
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

   echo "<b>Editando o produto de id ".$produto."</b></br></br>";

    $query ="SELECT * FROM produtos WHERE id = $produto";
    
    $result = $conectdb->query($query);
 

    if ($result->num_rows > 0) {
            echo "<form method='post' action='editar-conf.php'>";
        while($row = $result->fetch_assoc()) {

        	echo "<label>Nome do produto:</label><input type='text' name='nome' value='".$row["nome"]."'></input><br>";
        	echo "<label>Nome do produto:</label><input type='text' name='valor' value='".$row["valor"]."'></input><br>";
        	echo "<label>Nome do produto:</label><input type='text' name='cor' value='".$row["cor"]."'></input><br>";
        	echo "<label>Nome do produto:</label><input type='text' name='marca' value='".$row["marca"]."'></input><br>";
        	echo "<label>Nome do produto:</label><input type='text' name='id' readonly='readonly' value='".$row["id"]."'></input><br>";
        	echo "<input type='submit' value='salvar'></input>";

        }
            echo "</form>";
    } else {
        echo "<b class='erro'>Sem resultados para mostrar</b><br><br>";
    }




?>


</body>
</html>