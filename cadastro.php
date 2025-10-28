<?php

if (isset($_POST['cachorro'])) {
	echo "Você selecionou gato" . $_POST['cachorro'];
	echo "<br>";
}
	if (isset($_POST['gato'])) {
	echo "$_POST['gato']";
	echo "<br>";
}	
	if (isset($_POST['peixe'])) {
	echo "$_POST['peixe']";
	echo "<br>";
}	
	if (isset($_POST['passaro'])) {
	echo "$_POST['passaro']";
	echo "<br>";
}	

	if (isset($_POST['estado_civil'])) {
		echo "Você está" . $_POST['estado_civil'];
		echo "<br>";
	}

?>