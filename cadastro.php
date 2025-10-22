<?php

if ($_SERVER['REQUEST_METHOD'] == 'post'){

	$primeiroNome = $_POST['$primeiroNome'];
	$segundoNome = $_POST['$segundoNome'];
	$escolhasPets = $_POST['$escolhasPets'];

	echo($primeiroNome .
		$segundoNome .
		$escolhasPets);

	echo '<a href="../index.php">Voltar</a>';

	//header("location: ../index.php")
}else{
	echo "É get"
}


?>