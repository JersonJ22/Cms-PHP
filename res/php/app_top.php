<?php
	require 'functions.php';

	//Con este objeto vamos a poder acceder a todo que tengamos en functions
	$user = new User_Actions();

	if (!isset($_GET['section'])) {		
		//Obtener publicaciones recientes
		$curso = $user->getRecentCurso();
		$evento = $user->getEvento();
		//$cursos = $user->getCursos();	 este si va	
		//$perfil = $user->getPerfil($_SESSION['user']);		

		//echo "<pre>",print_r($posts),"</pre>";
		//exit();
	}elseif (isset($_GET['section']) && $_GET['section'] == "post"){
		//Obtener info de la publicacion
		//$curso = $user->getPostInfo($_GET['id_post']);
		$perfil = $user->getPerfil($_SESSION['user']);	
		$cursos = $user->getCursoInfo($_GET['id_curso']);		
		$capitulo = $user->getCapitulosCurso($_GET['id_curso']);		
		$temario = $user->getTemarioCapitulo($capitulo[0]);		

		//Obtener el perfil del usuario
		if (isset($_SESSION['user'])) {
			$profile = $user->getProfile($_SESSION['user']);

			//Verificar que la publicacion visitada ya este en favoritos
			//$check = $user->checkFavorites($profile[0]["id_users"],$_GET['id_post']);
		}
	}elseif (isset($_GET['section']) && $_GET['section'] == "evento"){
		//Obtener info de la publicacion
		//$curso = $user->getPostInfo($_GET['id_post']);
		$perfil = $user->getPerfil($_SESSION['user']);	
		$evento = $user->getEventoInfo($_GET["id_evento"]);

		//Obtener el perfil del usuario
		if (isset($_SESSION['user'])) {
			$profile = $user->getProfile($_SESSION['user']);

			//Verificar que la publicacion visitada ya este en favoritos
			//$check = $user->checkFavorites($profile[0]["id_users"],$_GET['id_post']);
		}		
	}elseif (isset($_SESSION['user']) && isset($_GET['section']) && $_GET['section'] == "my_favorites"){
		//Obtener el perfil del usuario
		$profile = $user->getProfile($_SESSION['user']);

		//Obtener publicaciones favoritas		
		$post = $user->getMyFavorites($profile[0]['id_users']);
		$perfil = $user->getPerfil($_SESSION['user']);	

	}elseif (isset($_GET['section']) && $_GET['section'] == "posts"){
		//Obtener publicaciones
		$curso = $user->getCursos();		
		$perfil = $user->getPerfil($_SESSION['user']);	
	}elseif (isset($_GET['section']) && $_GET['section'] == "my_perfil"){
		//Obtener publicaciones
		$perfil = $user->getPerfil($_SESSION['user']);	
	}
?>