<?php
	require '../functions.php';

	$user = new User_Actions();

	$login = $user->loginuser($_POST['email'],$_POST['pass']);

	
	if ($login) {
		//Iniciar Sesion
		$_SESSION['user'] = $_POST['email'];
		echo "true";
	}else{
		echo "false";
	}
?>