<?php
session_start();
include "database/database.php";
if (isset($_POST) && !empty($_POST)) {
	$name = strtolower($_POST["author"]);
	$data = author_name($dbo, $name);

	$_SESSION['search_ornaments'] = $data;
	header("Location: collections.php");
} else {
	header("Location: collections.php");
}
