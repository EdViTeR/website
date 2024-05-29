<?php
    session_start();
    include "../database/database.php";
    if (!isset($_SESSION['user'])) {
        header("Location: /");
    }
    $ornament = user_ornament($dbo, $_SESSION['user']['id']);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет руководителя</title>
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
        <h1 class="cabinet-title">Приветствуем вас, <?php echo $_SESSION['user']['name'] ?>!</h1>
        <a href="../logout.php" class="" type="submit">Выход</a>
    </div>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image"><br><br>
        <button type="submit" class="generate-button">ЗАГРУЗИТЬ</button>
        <label for="GET-name">Название</label>
        <input id="GET-name" type="text" name="name" />
        <input type="submit" value="Save" />
    </form>
    <?php
    require_once '../footer.php';
    $footer = new Footer();
    $footer->render();
    ?>
</body>

</html>