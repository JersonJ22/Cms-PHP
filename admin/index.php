<?php require '../res/php/app_top_admin.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://localhost/web/cms_cursos/res/css/framework/semantic/semantic.min.css">	
	<link href="https://file.myfontastic.com/mie5bpaSEK4AC4TPTHLHvQ/icons.css" rel="stylesheet">
	<link rel="shurtcon icon" href="http://localhost/web/cms_cursos/res/img/logo.png">
	<link rel="stylesheet" href="http://localhost/web/cms_cursos/res/css/main.css">	
	<title>Administrador</title>
</head>
<body>	
	<?php 
		if (isset($_SESSION['admin'])) {
			require '../views/navegacion/main_admin_nav.php'; 			
		}
	?>
	<?php
		if (!isset($_SESSION['admin'])) {
			require '../views/admin/home.php';
		}elseif(
			isset($_SESSION['admin']) &&
			!isset($_GET['section']) 
		){
			require '../views/admin/main.php';
		}elseif(
			isset($_SESSION['admin']) &&
			isset($_GET['section'])  &&
			$_GET['section'] == "posts"
		){
			require '../views/admin/posts.php';
		}elseif(
			isset($_SESSION['admin']) &&
			isset($_GET['section'])  &&
			$_GET['section'] == "categories"
		){
			require '../views/admin/categories.php';
		}elseif(
			isset($_SESSION['admin']) &&
			isset($_GET['section'])  &&
			$_GET['section'] == "cursos"
		){
			require '../views/admin/cursos.php';		
		}elseif(
			isset($_SESSION['admin']) &&
			isset($_GET['section'])  &&
			$_GET['section'] == "temario"
		){
			require '../views/admin/temario.php';
		}elseif(
			isset($_SESSION['admin']) &&
			isset($_GET['section'])  &&
			$_GET['section'] == "temario-curso"
		){
			require '../views/admin/temario-curso.php';
		}elseif(
			isset($_SESSION['admin']) &&
			isset($_GET['section'])  &&
			$_GET['section'] == "temario-evento"
		){
			require '../views/admin/temario-evento.php';
		}elseif(
			isset($_SESSION['admin']) &&
			isset($_GET['section'])  &&
			$_GET['section'] == "update-profesor"
		){
			require '../views/admin/update_profesor.php';
		}elseif (
			isset($_SESSION['admin']) &&
			isset($_GET['section']) &&
			$_GET['section'] == "curso"
		) {
			require '../views/admin/curso.php';
		}elseif (
			isset($_SESSION['admin']) &&
			isset($_GET['section']) &&
			$_GET['section'] == "evento"
		) {
			require '../views/admin/evento.php';
		}elseif(
			isset($_SESSION['admin']) &&
			isset($_GET['section'])  &&
			$_GET['section'] == "temarioevento"
		){
			require '../views/admin/temarioevento.php';
		}elseif(
			isset($_SESSION['admin']) &&
			isset($_GET['section'])  &&
			$_GET['section'] == "profesor"
		){
			require '../views/admin/profesor.php';
		}elseif(
			isset($_SESSION['admin']) &&
			isset($_GET['section'])  &&
			$_GET['section'] == "misprofesores"
		){
			require '../views/admin/misprofesores.php';
		}
	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
	<script src="http://localhost/web/cms_cursos/res/css/framework/semantic/semantic.min.js"></script>
	<script src="http://localhost/web/cms_cursos/res/js/admin.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
