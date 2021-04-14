<?php
	require '../functions.php';
	$obj = new Admin_Actions();

	$temacapi = $obj->getTemarioCapitulo($_GET['id_capitulo']);
	$save = $obj->saveTema($_POST['nombre_tema'],$temacapi);

	echo $save;
?>