<?php

require_once 'connect.php';

// получаем данные зарегистрированных пользователей для проверки регистрации
function user($dbo, $email) {
	$stmt = $dbo->prepare("SELECT * FROM user WHERE `email` = ?");
	$stmt->execute([$email]);
	$user_data = $stmt->fetch(PDO::FETCH_ASSOC);
	return $user_data;
}

// получаем данные всех пользователей для админки
function all_user($dbo, $role) {
	$stmt = $dbo->prepare("SELECT * FROM user WHERE `role` = ?");
	$stmt->execute([$role]);
	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $users;
}

// получаем данные всех администраторов для админки
function all_admin($dbo, $role) {
	$stmt = $dbo->prepare("SELECT * FROM user WHERE `role` = ?");
	$stmt->execute([$role]);
	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $users;
}

function save_user_images($dbo, $way, $id) {
	$data = [
	    'way' => $way,
	    'id' => $id,
	];
	$sql = "UPDATE user SET photo=:way WHERE id=:id";
	$stmt= $dbo->prepare($sql);
	$stmt->execute($data);
}