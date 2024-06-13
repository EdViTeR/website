<?php 
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['search_ornaments']);
	header('Location: cabinet/sign_in.php');
?>