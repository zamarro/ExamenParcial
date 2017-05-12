<?php
	//echo "<h1>hola mundo</h1>";
	date_default_timezone_set('Europe/Paris');
	echo date("Y-m-d H:i:s");
	for ($i=1; $i<=6 ; $i++) { 
		echo "<h$i style='color:#$i$i$i';>Cabecera Nivele $i<|/h$i>";
		# code...
	}
?>