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
<?php
require_once '../header.php';
$header = new Header();
$header->render();
?>

<body>
    <div class="container">
        <main class="form-signin">
            <h1>Личный кабинет</h1>
            <form action="authorization.php" method="post">
                <div class="form-field">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="form-field">
                    <label for="password">Пароль</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Войти</button>
                <?php
                if (isset($_SESSION['access'])) {
                    echo '<p class="access">' . $_SESSION['access'] . '</p>';
                } elseif (isset($_SESSION['message'])) {
                    echo '<p class="message">' . $_SESSION['message'] . '</p>';
                }
                unset($_SESSION['access']);
                unset($_SESSION['message']);
                ?>
            </form>
            <p>Нет аккаунта? <a href="sign_up.php">Зарегистрируйтесь!</a></p>
        </main>
    </div>
    </main>
    <script src="../assets/script.js"></script>
</body>

</html>