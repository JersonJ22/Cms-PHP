<?php
	//echo $_POST['category'];
	require '../functions.php';
	$obj = new Admin_Actions();

	$update = $obj->updateProfesor(3, $_POST['txtNombreProfesor'], $_POST['txtDescripcionProfesor'], $_POST['txtEspecialidadProfesor']);
	//$update = $obj->updateProfesor(3,"Hola","Wue tal","eejeje");

	echo $update;
?>