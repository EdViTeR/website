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
            $_SESSION['user'] = [
                "id" => $user['id'],
                "email" => $user['email'],
                "name" => $user['name'],
                "role" => $user['role'],
            ];
            switch ($user['role']) {
                case '1':
                    header("Location: ../user/user.php"); //Пользователь
                    break;
                case '2':
                    header("Location: ../head/user.php"); //руководитель
                    break;
                case '5':
                    header("Location: ../admin/admin.php"); //админ
                    break;
            } 
        } else {
            $_SESSION['message'] = 'Неверный логин или пароль';
            header("Location: sign_in.php");
        }
    }

?>


