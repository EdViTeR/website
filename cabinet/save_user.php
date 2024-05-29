<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root . '/database/connect.php';
require_once $root . '/database/database.php';


$name 			        = $_POST['name'];
$email 			        = $_POST['email'];
$repeate_password       = $_POST['repeat_password'];
$password               = $_POST['password'];
$user                   = user($dbo, $email);

if (isset($user) && !empty($user)) {
    $_SESSION['message'] = 'Данный Email уже зарегистрирован!';
    header("Location: sign_up.php");
} else {
    if ($repeate_password === $password) {
        $password              = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = ("INSERT INTO `user` SET `name` = :name, `email` = :email, `password` = :password");
        $params = [
            'name'         => $name,
            'email'         => $email,
            'password'      => $password,
        ];
        $stmt = $dbo->prepare($query);
        $stmt->execute($params);
        $_SESSION['access'] = 'Вы успешно зарегистрированы!';
        header('Location: sign_in.php');
    } else {
        $_SESSION['message'] = 'Пароли не совпадают!';
        header('Location: sign_up.php');
    }
}


