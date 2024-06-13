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

// сохраняем орнамент по id пользователя
function save_ornament($dbo, $way, $user_id, $name, $materials) {
	$data = [
	    'way' 			=> $way,
	    'user_id' 		=> $user_id,
	    'name' 			=> $name,
	    'materials' 	=> $materials,
	];
	$sql = "INSERT INTO `ornament` SET `user_id` = :user_id, `way` = :way, `name` = :name, `materials` = :materials";
	$stmt= $dbo->prepare($sql);
	$stmt->execute($data);
}

// удаляем орнамент по id
function delete_ornament($dbo, $id) {
	$sql = "DELETE FROM ornament WHERE id = $id";
	$result = $dbo->query($sql);
	return $result;
}

// получаем один орнамент по id
function view_ornament($dbo, $id) {
	$stmt = $dbo->prepare("SELECT * FROM ornament WHERE `id` = ?");
	$stmt->execute([$id]);
	$ornament = $stmt->fetch(PDO::FETCH_ASSOC);
	return $ornament;
}

// получаем орнаменты одного пользователя по id
function user_ornament($dbo, $user_id) {
	$stmt = $dbo->prepare("SELECT * FROM ornament WHERE `user_id` = ?");
	$stmt->execute([$user_id]);
	$ornament = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $ornament;
}

// получаем все орнаменты для главной страницы
function all_ornament($dbo) {
	$ornament = $dbo->query('SELECT * FROM ornament')->fetchAll(PDO::FETCH_ASSOC);
	return $ornament;
}

//получем пользователя по id для вывода имени на главной
function user_name_ornament($dbo, $user_id) {
	$stmt = $dbo->prepare("SELECT * FROM user WHERE `id` = ?");
	$stmt->execute([$user_id]);
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	return $user;
}

//получем пользователя по id для вывода имени на главной
function ornament_review($dbo, $ornament_id) {
	$stmt = $dbo->prepare("SELECT * FROM review WHERE `ornament_id` = ?");
	$stmt->execute([$ornament_id]);
	$review = $stmt->fetchAll(PDO::FETCH_ASSOC);
	return $review;
}

//Получаем автора по имени добавления автора
function author_name($dbo, $name) {
	$stmt = $dbo->prepare("SELECT * FROM user WHERE `name` = ?");
	$stmt->execute([$name]);
	$user_data = $stmt->fetch(PDO::FETCH_ASSOC);
	if (isset($user_data) && !empty($user_data)) {
		$user_id = $user_data['id'];
		$ornaments = user_ornament($dbo, $user_id);
	} else {
		$ornaments = '';
	}
	return $ornaments;
}
