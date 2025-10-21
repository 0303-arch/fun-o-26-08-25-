<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastro de Usuário</title>
		 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
	</head>
	<body>
	
		<h1>Cadastro</h1>

		<form action="#" method="post">
			<label for="primeroNome">Primeiro Nome</label>
 			<input type="text" name="primeroNome"
 			id="primeroNome" placeholder="primeroNome..."
 			maxlength="50" required autofocus>
 			<br>
 			<br>
 			<label for="segundoNome">Sobrenome</label>
 			<input type="text" name="segundoNome"
 			id="segundoNome" placeholder="segundoNome..."
 			maxlength="50" required>
 			<label for="escolhasPets">Escolha Seu Pet</label>
 			<select id="escolhasPets" name="escolhasPets">
 				<option value="nenhum">Nenhum</option>
 				<option value="cachorro">Cachorro</option>
 				<option value="gato">Gato</option>
 				<option value="peixe">Peixe</option>
 				<option value="passaro">Pássaro</option>

 			</select>
 			<button type="submit">Enviar</button>
 			<button type="reset">Limpar</button>
 		</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
	</body>
	</html>	