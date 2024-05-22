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
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/globals.css">
    <link type="image/x-icon" href="../assets/img/favicon.ico" rel="shortcut icon">
</head>
<body>
    <?php
        require_once '../header.php';
        $header = new Header();
        $header->render();
    ?>
</body>
    <a href="../logout.php" class="" type="submit">Выход</a>
    <?php
        require_once '../footer.php';
        $footer = new Footer();
        $footer->render();
    ?>
</body>
</html>