<?php
ini_set('display_errors', 'On');
error_reporting(E_ERROR);
session_start();
if (isset($_SESSION['user'])) {
    switch ($_SESSION['user']['role']) {
        case '1':
            header("Location: user/user.php?user_id=$id"); //пользователь
            break;
        case '2':
            header("Location: admin/admin.php"); //админ
            break;
    } 
}
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Авторизация</title>
        <link rel="stylesheet" href="../assets/style.css">
    </head>
    <header class="header">
        <div class="logo">
            <a href="/"><img src="../assets/img/logo.png"></a>
        </div>
        <div class="nav-toggle">
            <img src="../assets/img/icon.png" alt="Меню" onclick="toggleMenu()">
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#">ШКОЛА</a></li>
                <li><a href="#">СТАТЬИ</a></li>
                <li><a href="#">КОЛЛЕКЦИИ</a></li>
                <li><a href="#">О ПРОЕКТЕ</a></li>
                <li><a href="sign_in.php">КАБИНЕТ</a></li>
            </ul>
        </nav>
        <div class="dropdown-menu">
            <ul>
                <li><a href="#">ШКОЛА</a></li>
                <li><a href="#">СТАТЬИ</a></li>
                <li><a href="#">КОЛЛЕКЦИИ</a></li>
                <li><a href="#">О ПРОЕКТЕ</a></li>
                <li><a href="sign_in.php">КАБИНЕТ</a></li>
            </ul>
        </div>
    </header>
    <body>
        <div class="container">
            <main class="form-signin">
                <h1>Регистрация</h1>
                <form action="save_user.php" method="post">
                    <div class="form-field">
                        <label for="name">Имя</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-field">
                        <label for="email">Почта</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-field">
                        <label for="password">Пароль</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-field">
                        <label for="repeat_password">Подтвердите пароль</label>
                        <input type="password" id="repeat_password" name="repeat_password" required>
                    </div>
                    <?php 
                        if (isset($_SESSION['access'])) {
                            echo '<p class="access">' . $_SESSION['access'] . '</p>';
                        } elseif (isset($_SESSION['message'])) {
                            echo '<p class="message">' . $_SESSION['message'] . '</p>';
                        }
                        unset($_SESSION['access']);
                        unset($_SESSION['message']);
                    ?>
                    <button type="submit">Зарегистрироваться</button>
                </form>
                <p>Уже есть аккаунт? <a href="sign_in.php">Войти!</a></p>
            </main>
        </div>
        </main>
    <script src="../assets/script.js"></script>
    </body>
</html>