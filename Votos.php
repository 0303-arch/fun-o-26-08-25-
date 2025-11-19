<?php

	$voto = $_GET['voto'];

	if (isset($_COOKIE['voto'])) {

		setcookie("voto", $voto, time()+3600*24*31);

		$msg = "Você já votou uma vez!<br>Seu voto foi:". $voto ;
		


	}
	else {

		$msg = "Você votou: ". $voto ."<br>Obrigado por votar!";

	}
	
	echo "$msg"."$voto";
?>