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
    <link rel="stylesheet" href="style.css">
  </head>
    <form action="authorization.php" method="post">
        <h1 class="h3 mb-3 fw-normal">Личный кабинет</h1>
        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Пароль</label>
        </div>
        <button class="" type="submit">Войти</button>
        <a href="sign_up.php" class="" type="submit">Регистрация</a>
        </br></br> 
        <a href="cabinet/sign_up.php" class="" type="submit">Главная</a>   
        <?php 
            if (isset($_SESSION['access'])) {
                echo '<p class="access">' . $_SESSION['access'] . '</p>';
            } elseif (isset($_SESSION['message'])) {
                echo '<p class="message">' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['access']);
            unset($_SESSION['message']);
        ?>
      </main>
  </body>
</html>