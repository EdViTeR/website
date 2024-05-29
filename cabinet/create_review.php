<?php
include "../database/database.php";

$text			= $_POST['text'];
$head_id		= $_SESSION['user']['id'];
$ornament_id	= $_GET['id'];
$query = ("INSERT INTO `review` SET `head_id` = :head_id, `ornament_id` = :ornament_id, `text` = :text");
$params = [
    'ornament_id'	=> $ornament_id,
    'head_id'	=> $head_id,
    'text' 		=> $text,
];
$stmt = $dbo->prepare($query);
$stmt->execute($params);
header('Location: ornament.php?id=' . $ornament_id);


