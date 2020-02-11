<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
		<title>Deletar?</title>
		

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

   echo "Deseja deletar o produto de id <b>".$produto."</b></br>";
   echo "<a href='deletar-sim.php?id=".$produto."'>Sim</a>"."  "."<a href='javascript:history.back()'>Não</a>"


?>
</body>
</html>