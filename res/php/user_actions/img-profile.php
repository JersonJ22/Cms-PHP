<?php
	require '../functions.php';

	$user = new User_Actions();

	$name_img = uniqid();

	//Obtener el perfil del usuario
	$perfil = $user->getProfile($_SESSION['user']);

	$img_profile = $user->img_perfil($perfil,$name_img);

	if ($img_profile > 0) {
		move_uploaded_file($_FILES["perfil_file"]["tmp_name"], "../../img/img_post/" . $name_img . ".png");
		echo "true";
	}else{
		echo "false";
	}
?>