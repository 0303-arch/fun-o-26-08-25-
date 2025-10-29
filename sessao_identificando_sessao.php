<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sessão de Usuário - identificando umas sessão</title>
</head>
<body>

	<?php
		session_start();

		$_SESSION['nome'] = "usuário";
	?>

</body>
</html>