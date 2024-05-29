<?php
session_start();
include "../database/database.php";
if (!isset($_SESSION['user'])) {
    header("Location: /");
}
$ornament = view_ornament($dbo, $_GET['id']);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../assets/globals.css">
    <link rel="stylesheet" href="../assets/cabinet.css">
    <link type="image/x-icon" href="assets/img/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="../assets/collections.css">
</head>

<body>
    <?php
    require_once '../header.php';
    $header = new Header();
    $header->render();
    ?>

    <div class="container">
        <h1 class="collections-main-title">Орнамент <?php echo $ornament['name'] ?></h1>
        <div class="collections">
        <?php
            echo '<div class="collection">
                    <img class="collection-img" src="' . $ornament['way'] . '" alt="' . $ornament['way'] . '">
                    <div class="collection-title-container">
                        <p class="collection-materials">' . $ornament['materials'] . '</p>
                        <div class="collection-rating">
                            <span class="collection-rating-value">' . $ornament['rating'] . '</span>
                            <img class="collection-rating-icon" width="24" src="../assets/img/star.svg" alt="Звезда">
                        </div>
                    </div>
                    <div class="collection-border">
                    </div></div>';
            if ($ornament['user_id'] == $_SESSION['user']['id']) {
                echo '<a href="delete_ornament.php?id=' . $ornament['id'] . '" class="collection-name">Удалить орнамент</a>';
            }
        ?>
        </div>
    </div>

    <?php
    require_once '../footer.php';
    $footer = new Footer();
    $footer->render();
    ?>
</body>

</html>