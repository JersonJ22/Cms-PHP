<?php
	require '../functions.php';
	$obj = new Admin_Actions();

	$name_img = uniqid();

	//Obtener el perfil del administrador activo
	$profile = $obj->getProfile($_SESSION['admin']);

	$save = $obj->saveCurso($_POST['txtNameCurso'], $_POST['txtCategory'], $_POST['txtDescripcionCurso'], $_POST['txtPrecioCurso'], 
		$name_img, $profile[0]['id_admin'], $_POST['txtProfesorCurso']);

	if ($save > 0) {
		move_uploaded_file($_FILES["image_file"]["tmp_name"], "../../img/img_post/" . $name_img . ".png");

		echo "true";
	}else{
		echo "false";
	}
?>