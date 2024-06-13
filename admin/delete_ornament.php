<?php
session_start();
include "../database/database.php";
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 5) {
    header("Location: /");
}
delete_ornament($dbo, $_GET['id']);
header('Location: ornaments.php');