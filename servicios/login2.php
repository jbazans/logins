<?php 
	$user_bd="hola";
	$password_bd="mundo";	

	$user=$_GET['user'];
	$password=$_GET['password'];

	if ($user==$user_bd and $password=$password_bd) {
		echo 1;
	}else{
		echo 0;
	}
?>