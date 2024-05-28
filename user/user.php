<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: /");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../assets/globals.css">
    <link rel="stylesheet" href="../assets/cabinet.css">
    <link type="image/x-icon" href="assets/img/favicon.ico" rel="shortcut icon">
</head>

<body>
    <?php
    require_once '../header.php';
    $header = new Header();
    $header->render();
    ?>

    <div class="container">

        <h1 class="cabinet-title">Приветствуем вас, &lt;name&gt;!</h1>
        <a href="../logout.php" class="" type="submit">Выход</a>
        <?php
        require_once '../generate-banner.php';
        $header = new Banner();
        $header->render();
        ?>

        <h1 class="collections-main-title">Ваши орнаменты</h1>
        <?php
        require_once '../utils/collections-parse-cabinet.php';
        $collections = new Collections();
        $collections->render();
        ?>


    </div>

    <?php
    require_once '../footer.php';
    $footer = new Footer();
    $footer->render();
    ?>
</body>

</html>