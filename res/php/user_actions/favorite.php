<?php
	require '../functions.php';
	$user = new User_Actions();

	//Obtener el perfil del usuario
	$profile = $user->getProfile($_SESSION['user']);

	//Marcar como favorito
	$favorite = $user->markAsFavorite($_POST["id_post"], $profile[0]["id_users"]);

	if ($favorite > 0) {
		echo "true";
	}else{
		echo "false";
	}
?>