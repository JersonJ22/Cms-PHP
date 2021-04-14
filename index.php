<?php require 'res/php/app_top.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://localhost/web/cms_cursos/res/css/framework/semantic/semantic.min.css">	
	<link rel="stylesheet" href="http://localhost/web/cms_cursos/res/css/framework/uikit.min.css">	
	<link href="https://file.myfontastic.com/mie5bpaSEK4AC4TPTHLHvQ/icons.css" rel="stylesheet">
	<link rel="stylesheet" href="http://localhost/web/cms_cursos/res/css/main.css">	
	<link rel="shurtcon icon" href="http://localhost/web/cms_cursos/res/img/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<title>Principal</title>
</head>
<body>
	<?php require 'views/navegacion/main_nav.php'; ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
  		var js, fjs = d.getElementsByTagName(s)[0];
  		if (d.getElementById(id)) return;
  		js = d.createElement(s); js.id = id;
  		js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.1&appId=990650454386775&autoLogAppEvents=1';
  		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php
		if (!isset($_GET['section'])) {
			require 'views/home.php';
		}elseif (isset($_GET['section']) && $_GET['section'] == "post"){
			require 'views/post.php';
		}elseif (isset($_GET['section']) && $_GET['section'] == "register"){
			require 'views/register.php';
		}elseif (isset($_GET['section']) && $_GET['section'] == "log_in"){
			require 'views/login.php';
		}elseif (isset($_SESSION['user']) && isset($_GET['section']) && $_GET['section'] == "my_favorites"){
			require 'views/my_favorites.php';
		}elseif (isset($_SESSION['user']) && isset($_GET['section']) && $_GET['section'] == "my_perfil"){
			require 'views/my_perfil.php';
		}elseif (isset($_GET['section']) && $_GET['section'] == "posts"){
			require 'views/posts.php';
		}elseif (isset($_GET['section']) && $_GET['section'] == "evento"){
			require 'views/evento.php';
		}
	?>
	<?php require 'views/footer/footer.php'; ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://localhost/web/cms_cursos/res/css/framework/semantic/semantic.min.js"></script>
	<script src="http://localhost/web/cms_cursos/res/css/framework/uikit.min.js"></script>
	<script src="http://localhost/web/cms_cursos/res/js/main.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
