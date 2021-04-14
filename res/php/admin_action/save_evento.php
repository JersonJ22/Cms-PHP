<?php
	require '../functions.php';
	$obj = new Admin_Actions();

	$name_img = uniqid();

	//Obtener el perfil del administrador activo
	$profile = $obj->getProfile($_SESSION['admin']);

	$save = $obj->saveEvento($_POST['txtNameEvento'], $_POST['txtDescripcionEvento'], $name_img, $profile[0]['id_admin'],$_POST['txtProfesorEvento']);

	if ($save > 0) {
		move_uploaded_file($_FILES["image_file"]["tmp_name"], "../../img/img_post/" . $name_img . ".png");

		echo "true";
	}else{
		echo "false";
	}
?>