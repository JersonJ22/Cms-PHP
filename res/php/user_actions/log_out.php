<?php
	session_start();

	session_destroy();
	header("Location: http://localhost/web/cms_cursos/");
	exit(); //Para aseguranos de que no corra mas codigo luego de cerrar
	
?>