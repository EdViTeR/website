<?php 
	session_start();
	unset($_SESSION['user']);
	header('Location: cabinet/sign_in.php');
?>