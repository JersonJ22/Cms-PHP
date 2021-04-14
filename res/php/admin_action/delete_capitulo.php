<?php	
	require '../functions.php';
	$obj = new Admin_Actions();

	$delete = $obj->deleteCapitulo($_POST['id_capitulo']);

	echo $delete;
?>