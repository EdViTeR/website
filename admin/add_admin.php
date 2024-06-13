<?php
session_start();
include "../database/database.php";
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 5) {
    header("Location: /");
}
add_admin($dbo, $_GET['id'], 5);
header('Location: users.php');