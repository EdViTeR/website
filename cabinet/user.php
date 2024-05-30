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

        <h1 class="cabinet-title">Приветствуем вас, <?php echo $_SESSION['user']['name'] ?>!</h1>
        <?php
        require_once '../generate-banner.php';
        $header = new Banner();
        $header->render();
        if (isset($ornament) && !empty($ornament)) {
            echo '<h1 class="collections-main-title">Ваши орнаменты</h1>
                    <div class="collections">';
            foreach ($ornament as $key => $value) {
                echo '<a class="collection" href="../cabinet/ornament.php?id=' . $value['id'] . '">
                        <img class="collection-img" src="' . $value['way'] . '" alt="' . $value['name'] . '">
                        <div class="collection-title-container">
                            <h2 class="collection-title">' . $value['name'] . '</h2>
                            <div class="collection-rating">
                                <span class="collection-rating-value">' . $value['rating'] . '</span>
                                <img class="collection-rating-icon" width="24" src="../assets/img/star.svg" alt="Звезда">
                            </div>
                        </div>
                        <p class="collection-materials">' . $value['materials'] . '</p>
                        <div class="collection-border">
                        </div>
                    </a>';
            }
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