<?php
	//echo $_POST['email'];
	require '../functions.php';

	$admin = new Admin_Actions();

	//Login
	$login = $admin->login($_POST['email'], $_POST['pass']);

	//echo print_r($login); //cuando es array
	//echo $login;

	if ($login) {
		//Iniciar Sesion
		$_SESSION['admin'] = $_POST['email'];
		echo "true";
	}else{
		echo "false";
	}
?>