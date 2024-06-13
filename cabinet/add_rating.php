<?php 
include "../database/database.php";
$id = $_GET['id'];
$take_rating = take_rating($dbo, $id);
$rating = $take_rating['rating'] + 1;
change_rating($dbo, $rating, $id);
header("Location: ornament.php?id=$id");
?>