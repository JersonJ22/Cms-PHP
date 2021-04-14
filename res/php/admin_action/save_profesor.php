<?php
	require '../functions.php';
	$obj = new Admin_Actions();

	$name_img = uniqid();

	//Obtener el perfil del administrador activo
	$profile = $obj->getProfile($_SESSION['admin']);

	$save = $obj->saveProfesor($_POST['txtNameProfesor'], $_POST['txtDescripcionProfesor'], 
		$_POST['txtEspecialidadProfesor'], $name_img, $profile[0]['id_admin']);

	if ($save > 0) {
		move_uploaded_file($_FILES["image_file"]["tmp_name"], "../../img/img_post/" . $name_img . ".png");

		echo "true";
	}else{
		echo "false";
	}
?>