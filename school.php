<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши руководители</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/globals.css">
    <link rel="stylesheet" href="assets/school.css">
</head>

<body>
    <?php
    require_once 'header.php';
    $header = new Header();
    $header->render();
    ?>

    <div class="content-school">
        <h1>Наши руководители</h1>
        <div class="leaders">
            <div class="leader-card">
                <img src="assets/img/photo_1.png" alt="Н.П. Бесчастнов" class="leader-photo">
                <div class="leader-info">
                    <div class="leader-name">Н.П. Бесчастнов</div>
                    <p class="leader-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="leader-button" href="#">ПЕРЕЙТИ В ПРОФИЛЬ</button>
                </div>
            </div>
            <div class="leader-card">
                <div class="leader-info">
                    <div class="leader-name">А.Н. Новиков</div>
                    <p class="leader-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <button class="leader-button" href="#">ПЕРЕЙТИ В ПРОФИЛЬ</button>
                </div>
                <img src="assets/img/photo_2.png" alt="А.Н. Новиков" class="leader-photo">
            </div>
        </div>
    </div>

    <?php
    require_once 'quote.php';
    $quote = new Quote();
    $quote->render();
    ?>

    <?php
    require_once 'footer.php';
    $footer = new Footer();
    $footer->render();
    ?>
    <script src="assets/script.js"></script>
</body>

</html>