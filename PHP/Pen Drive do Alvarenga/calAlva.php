<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Calculadora</title>
</head>
<body>
	<form method="post">
		<h3>Digite os dois valores nos campos abaixo:</h3>
		<input type="text" name="cmp1" size="4" class="campoClass">
		<input type="text" name="cmp2" size="4" class="campoClass">
		<select name="metodo">
			<option value="1">Somar</option>
			<option value="2">Subtração</option>
			<option value="3">Multiplicação</option>
			<option value="4">Divisão</option>
		</select>
		<br><br>
		<input type="submit" name="btnCal" value="Calcular">
		<input type="reset" name="btnLimpar" value="Limpar campos">
	</form>

	<?php 
		@$v1 = $_POST[cmp1];
		@$v2 = $_POST[cmp2];
		@$metodo = $_POST[metodo];

		switch ($metodo) {
			case 1:
				$ss = $v1+$v2;
				echo "<h5>A soma é $ss</h5>";
				break;
			case 2:
				$sb = $v1-$v2;
				echo "<h5>A soma é $sb</h5>";
				break;
			case 3:
				$mul = $v1*$v2;
				echo "<h5>A soma é $mul</h5>";
				break;
			case 4:
				$div = $v1/$v2;
				echo "<h5>A soma é $div</h5>";
				break;
			default:
				echo "<h5>Não digitou nada!<\h5>";
				break;
		}

	 ?>
</body>
</html>