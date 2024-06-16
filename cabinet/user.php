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
        <h1 class="cabinet-title">Приветствуем вас, <?= htmlspecialchars($_SESSION['user']['name']) ?>!</h1>
        <?php require_once '../generate-banner.php'; ?>
        <?php $header = new Banner(); ?>
        <?php $header->render(); ?>
        <?php if (isset($ornament) && !empty($ornament)) : ?>
            <h1 class="cabinet-collection-title">Ваши орнаменты</h1>
            <div class="collections">
                <?php foreach ($ornament as $value) : ?>
                    <div class="collection">
                        <a href="/cabinet/ornament.php?id=<?php echo $value['id']; ?>" class="collection-img-container">
                            <img class="collection-img" src="<?php echo $value['way']; ?>" alt="<?php echo $value['name']; ?>">
                        </a>
                        <div class="collection-title-container">
                            <h2 class="collection-title"><?php echo $value['name']; ?></h2>
                            <div class="collection-rating">
                                <span class="collection-rating-value"><?php echo $value['rating']; ?></span>
                                <div class="collection-my-rating">
                                    <div class="collection-my-rating-icon">
                                        <img src="../assets/img/star-checked.svg" width="25" height alt="Star Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collection-materials-container">
                            <p class="collection-materials"><?php echo $value['materials']; ?></p>
                        </div>
                        <p class="collection-name"><?php echo $value['time']; ?></p>
                        <div class="collection-border">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <?php
    require_once '../footer.php';
    $footer = new Footer();
    $footer->render();
    ?>

    <script src="../assets/script.js"></script>
</body>

</html>