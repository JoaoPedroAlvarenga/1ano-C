<html>
	<head>
		<title>Editar</title>
		<meta charset='utf-8'/>

  
	</head>

	<body>
<?php
    include('conexao.php');

    $produto = $_GET['id'];

   echo "<b>Editando o produto de id ".$produto."</b></br></br>";

    $query ="SELECT * FROM produtos WHERE id = $produto";
    
    $result = $conectdb->query($query);
 

    if ($result->num_rows > 0) {
            echo "<form method='post' action='editar-conf.php'>";
        while($row = $result->fetch_assoc()) {

        	echo "<label>Nome do produto:</label><input type='text' name='nome' value='".$row["nome"]."'></input><br>";
        	echo "<label>Valor:</label><input type='text' name='valor' value='".$row["valor"]."'></input><br>";
        	echo "<label>Cor:</label><input type='text' name='cor' value='".$row["cor"]."'></input><br>";
        	echo "<label>Marca:</label><input type='text' name='marca' value='".$row["marca"]."'></input><br>";
        	echo "<label>ID:</label><input type='text' name='id' readonly='readonly' value='".$row["id"]."'></input><br>";
        	echo "<input type='submit' value='salvar'></input>";

        }
            echo "</form>";
    } else {
        echo "Sem resultados para mostrar<br><br>";
    }

?>


</body>
</html>