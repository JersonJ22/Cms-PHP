<?php
	require '../functions.php';

	$user = new User_Actions();

	$register = $user->register($_POST['name'],$_POST['lastname'],$_POST['username'],$_POST['email'],$_POST['password']);

	echo $register;
?>