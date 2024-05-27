<?php
session_start();
include "../database/database.php";
delete_ornament($dbo, $_GET['id']);
header('Location: user.php');