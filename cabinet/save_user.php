<?php

$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root . '/database/connect.php';
require_once $root . '/database/database.php';

$name 			        = $_POST['name'];
$email 			        = $_POST['email'];
$repeate_password       = $_POST['repeat_password'];
$password               = $_POST['password'];
if ($repeate_password === $password) {
    $password              = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = ("INSERT INTO `user` SET `name` = :name, `email` = :email, `password` = :password");
    $params = [
        'name'          => $name,
        'email'         => $email,
        'password'      => $password,
    ];
    $stmt = $dbo->prepare($query);
    $stmt->execute($params);
    header('Location: sign_in.php');
} else {
    header('Location: sign_up.php');
}


