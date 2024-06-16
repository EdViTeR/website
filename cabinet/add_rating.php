<?php
include "../database/database.php";
$id = $_GET['id'];
$take_rating = take_rating($dbo, $id);
$rating = $take_rating['rating'] + 1;
change_rating($dbo, $rating, $id);
if (isset($_GET['from']) && $_GET['from'] == 'collections') {
	header("Location: ../collections.php");
} elseif (isset($_GET['from']) && $_GET['from'] == 'ornament') {
	header("Location: ornament.php?id=$id");
}
