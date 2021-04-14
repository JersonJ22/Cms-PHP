<?php
	require '../functions.php';
	$user = new User_Actions();

	//Eliminar favorito
	$delete = $user->deleteFavorite($_POST['id_favorite']);

	if ($delete > 0) {
		echo "true";
	}else{
		echo "false";
	}
?>