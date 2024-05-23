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

    <div class="cabinet-container">
        <!-- <a href="../logout.php" class="" type="submit">Выход</a> -->

        <h1 class="cabinet-title">Приветствуем вас, &lt;name&gt;!</h1>

        <?php
        require_once '../generate-banner.php';
        $header = new Banner();
        $header->render();
        ?>

    </div>


    <div class="centered-block">
        <div class="top-border"></div>
        <p>ЦИТАТА Н. П. БЕСЧАСТНОГО LOREM IPSUM DOLOR SIII</p>
        <div class="bottom-border"></div>
    </div>

    <?php
    require_once '../footer.php';
    $footer = new Footer();
    $footer->render();
    ?>
</body>

</html>