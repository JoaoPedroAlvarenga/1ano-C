<html>
	<head>
    <meta charset="utf-8">
		<title>Deletar?</title>

	</head>

	<body>
<?php
    include('conexao.php');

    $produto = $_GET['id'];

   echo "Deseja deletar o produto de id ".$produto."</b></br>";
   echo "<a href='deletar-sim.php?id=".$produto."'>Sim</a>"."  "."<a href='ver.php'>Não</a>"


?>
</body>
</html>