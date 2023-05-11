<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de Input e Botão com PHP</title>
</head>
<body>
	<form method="post">
		<label for="meuInput">Digite um valor:</label>
		<input type="text" name="meuInput" id="meuInput">
		<button type="submit" name="meuBotao">Exibir valor</button>
	</form>
	
	<?php
	// Verifica se o botão foi pressionado
	if(isset($_POST['meuBotao'])) {
		// Armazena o valor do input em uma variável
		$valor = $_POST['meuInput'];
		
		// Exibe o valor na tela
		echo "Você digitou: $valor";
	}
	?>
</body>
</html>