<?php
	require '../functions.php';
	$obj = new Admin_Actions();

	$name_img = uniqid(); //nombramos nuestros archivos para que no se repitan los nombres

	//Obtener el perfil del administrador activo
	$profile = $obj->getProfile($_SESSION['admin']);

	$save = $obj->savePost($_POST['txtNamePost'],$_POST['txtCategory'],$_POST['txtDescription'], $name_img,$profile[0]['id_admin']);
	//$save = $obj->savePost($_POST['txtNamePost'],$_POST['txtCategory'],$_POST['txtDescription'], $name_img,$profile[0]['id_admin']);

	if ($save > 0) {
		move_uploaded_file($_FILES["image_file"]["tmp_name"] , "../../img/img_post/" . $name_img . ".png"); //el tmp_name es la imagen como 

		echo "true";
	}else{
		echo "false";
	}
?>