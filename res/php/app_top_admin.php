<?php
	require 'functions.php';

	//Con este objeto vamos a poder acceder a todo que tengamos en functions
	$admin = new Admin_Actions();

	if(
		isset($_SESSION['admin']) &&
		!isset($_GET['section']) 
	){
		//Obtener publicaciones
		$posts = $admin->getPosts();
	}

	if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "posts"
	){
		//Obtener Cursos
		$curso = $admin->getCursos();
	}

	if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "cursos"
	){
		//Obtener Cursos
		$categories = $admin->getCategories();
		$profesor = $admin->getProfesor();		
	}

	if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "categories"
	){
		//Obtener categorias
		$categories = $admin->getCategories();
	}

	/*if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "temario"
	){
		//Obtener categorias
		$capitulo = $admin->getCapitulos();
	}*/

	if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "temario"
	){
		//Obtener categorias
		$cursos = $admin->getCursos();
	}

	if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "evento"
	){
		//Obtener eventos
		$cursos = $admin->getEvento();
		$profesor = $admin->getProfesor();		
	}

	if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "temarioevento"
	){
		//Obtener eventos
		$evento = $admin->getEvento();		
	}

	if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "misprofesores"
	){
		//Obtener eventos
		$profesor = $admin->getProfesor();		
	}

	if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "temario-curso"
	){
		//Obtener eventos
		//$cursos = $admin->getCursos();		
		$cursos = $admin->getCursoInfo($_GET["id_curso"]);
		//$capitulo = $admin->getCapitulos();
		$capitulo = $admin->getCapitulosCurso($_GET["id_curso"]);

	}

	if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "temario-evento"
	){
		//Obtener eventos
		//$evento = $admin->getEvento();		
		$evento = $admin->getEventoInfo($_GET["id_evento"]);
		//$capitulo_evento = $admin->getCapitulosEvento();	
		$capitulo_evento = $admin->getCapitulosEventoId(2);	
	}

	if(
		isset($_SESSION['admin']) &&
		isset($_GET['section'])  &&
		$_GET['section'] == "update-profesor"
	){
		//Obtener eventos
		//$evento = $admin->getEvento();		
		$profesor = $admin->getProfesorInfo($_GET["id_profesor"]);
		//$capitulo_evento = $admin->getCapitulosEvento();	
		//$capitulo_evento = $admin->getCapitulosEventoId(2);	
	}

	//ver desde aqui ejeje

	if (isset($_GET['section']) && 
		$_GET['section'] == "curso"){
		//Obtener info de la publicacion
		$curso = $admin->getCursoInfo($_GET['id_curso']);
		//$perfil = $admin->getProfile($_SESSION['admin']);	
		$profile = $admin->getProfile($_SESSION['admin']);	 //ejejeje
		$capitulo = $admin->getCapitulos();
		$capicurso = $admin->getCapitulosCurso($_GET['id_curso']);
		//$delete = $admin->deleteCapitulo($_GET['id_capitulo']);

		//Obtener el perfil del usuario
		if (isset($_SESSION['admin'])) {
			$profile = $admin->getProfile($_SESSION['admin']);

			//Verificar que la publicacion visitada ya este en favoritos
			//$check = $user->checkFavorites($profile[0]["id_admin"],$_GET['id_curso']);
		}
		
	}
?>