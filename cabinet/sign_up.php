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
    <link rel="stylesheet" href="../assets/cabinet.css">
    <link rel="stylesheet" href="../assets/globals.css">
</head>
<?php
require_once '../header.php';
$header = new Header();
$header->render();
?>

<body>
    <main class="form-signin">
        <div class="form-title">Регистрация</div>
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
        <p class="redirect">Уже есть аккаунт? <a href="sign_in.php">Войти!</a></p>
    </main>
    <?php
    require_once '../quote.php';
    $quote = new Quote();
    $quote->render();
    ?>
    </main>
    <?php
    require_once '../footer.php';
    $footer = new Footer();
    $footer->render();
    ?>
    <script src="../assets/script.js"></script>
</body>

</html>