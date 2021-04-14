<?php
	//echo $_POST['category'];
	require '../functions.php';
	$obj = new Admin_Actions();

	$profile = $obj->getProfile($_SESSION['admin']);

	//$capitulo = $obj->getCap();// traer el id del curso fe getCurso
	//$cursos = $obj->getCursosId();
	$curso = $obj->getCursoInfo($_GET['id_curso']); //
	$curso = $obj->getCursoId();

	$save = $obj->saveCapituloEvento($_POST['nombre_capitulo'], $curso[0]['id_curso']);
	//$save = $obj->saveCapitulo($_POST['nombre_capitulo'], $profile[0]['id_admin']);

	echo $save;
?>