<?php	
	require '../functions.php';
	$obj = new Admin_Actions();

	$delete = $obj->deleteCapituloEvento($_POST['id_capitulo']);

	echo $delete;
?>