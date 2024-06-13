<?php
session_start();
include "../database/database.php";
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 5) {
    header("Location: /");
}
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
change_password($dbo, $_GET['id'], $password);
header('Location: users.php');