<?php	
	require '../functions.php';
	$obj = new Admin_Actions();

	$delete = $obj->deleteCategory($_POST['id_category']);

	echo $delete;
?>