<?php
session_start();
$root = $_SERVER['DOCUMENT_ROOT'];
require_once $root . '/database/connect.php';
require_once $root . '/database/database.php';

$email = $_POST['email'];
$password = $_POST['password'];
$user = user($dbo, $email);
if (!isset($user) || empty($user)) {
    $_SESSION['message'] = 'Такого пользователя не существует';
    header("Location: sign_in.php");
} else {
    if (password_verify($password, $user['password'])) {
        $_SESSION['user'] = $user;
        if ($user['role'] == 5) {
            header("Location: ../admin/admin.php");
        } else {
            header("Location: user.php");
        }
    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header("Location: sign_in.php");
    }
}
