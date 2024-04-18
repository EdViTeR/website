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
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
  </head>
    <form action="save_user.php" method="post">
        <h1 class="h3 mb-3 fw-normal">Личный кабинет</h1>
        <div class="form-floating">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Введите имя" required>
                <label for="floatingInput">Имя</label>
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Введите пароль" required>
            <label for="floatingPassword">Пароль</label>
        </div>
        <button class="" type="submit">Зарегистрироваться</button>
        <a href="sign_in.php" class="" type="submit">Авторизация</a>
        <a href="cabinet/sign_up.php" class="" type="submit">Главная</a> 
      </main>
  </body>
</html>