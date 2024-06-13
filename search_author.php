<?php
session_start();
include "database/database.php";
if (isset($_POST) && !empty($_POST)) {
	$name = mb_strtolower($_POST["author"]);
	$data = author_name($dbo, $name);
	$_SESSION['search_ornaments'] = $data;
	header("Location: collections.php");
}
header("Location: collections.php");
?>