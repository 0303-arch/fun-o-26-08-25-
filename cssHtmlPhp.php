<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Usuário</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
</head>
<body>
	<!--
	<div class="conteiner">
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
			<br>	
			<label>Escolha Seu Pet</label>
			<br>
			<input type="checkbox" name="cachorro"><label>Cachorro</label>
			<br>
			<input type="checkbox" name="gato"><label>Gato</label>
			<br>
			<input type="checkbox" name="peixe"><label>Peixe</label>
			<br>	
			<input type="checkbox" name="passaro"><label>Pássaro</label> 
			<br>
			<br>
			<input type="radio" name="estado_civil" value="casado">
			<label>Casado</label>
			<input type="radio" name="estado_civil" value="solteiro">
			<label>Solteiro</label>

			<input type="hidden" name="user" value="admin">
			<input type="hidden" name="nivel" value="2">

			<input type="submit" name="OK">


			<select name="estados">
				<option value="sp">São Paulo</option>
				<option value="mg">Minas Gerais</option>
				<option value="es">Espírito Santo</option>
				<option value="bh">Bahia</option>
			</select><br><br>

			<input type="submit" value="Entrar">

			<br>
			<br>
			<textarea name="msg" cols="50" rows="8">

			</textarea>
			<input type="submit" value="Entrar">


			
			<button type="reset">Limpar</button>
		</form>


		<?php

			//session_start();

		?>

		<h3>Sessão de Usuário</h3>
		SID desta sessão é: <?php// echo session_id(); ?>-->


		<form name="logar" method="post" action="sessoes_bloqueando.php">
			Nome: <br>
			<input type="text" name="nome"><br>
			Senha: <br>
			<input type="password" name="senha"><br>

			<input type="submit" name="Entrar">

		</form>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
	</div>
</body>
</html>	