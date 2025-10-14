<?php

	$Nome= $_GET['Nome'];
	$Email= $_GET['Email'];

	if($Nome === "João Rafael" || $Email==="kanbarajoaolopes2000@gmail.com"){
		echo "<table>";
		echo "<tr>";
		echo "<td>";
		echo "<border>";
		print_r("<b>Bem Vindo ao Sistema<b>");
		echo "</border>";
		echo "<td>";
		echo "</tr>";
		echo "</table>";
		
	}else{
		print_r("<b>Usuario ou email incorretos<b>");
	}



?>




