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
    <link rel="stylesheet" href="../assets/create-ornament.css">
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
        <h1 class="cabinet-title">Создание орнамента</h1>
        <form class="create-ornament" action="upload.php" method="post" enctype="multipart/form-data">
            <div class="create-ornament-group"> <label class="create-ornament-name-label" for="name">Название</label>
                <input class="create-ornament-input" id="name" type="text" name="name" required />
            </div>

            <div class="create-ornament-group">
                <label class="create-ornament-label" for="materials">Материалы</label>
                <input class="create-ornament-input" id="materials" type="text" name="materials" required />
            </div>
            <div class="create-ornament-group">
                <!-- <label class="create-ornament-label" for="image">Изображение</label> -->
                <div class="custom-file-input">
                    <button class="create-ornament-upload-button">Выбрать файл</button>
                    <input class="create-ornament-image" type="file" name="image" style="display: none;">
                </div>
                <img id="selected-image" src="" alt="">
            </div>
            <input class="create-ornament-submit" type="submit" value="Отправить" />
        </form>
    </div>

    <?php
    require_once '../footer.php';
    $footer = new Footer();
    $footer->render();
    ?>
    <script>
        const createOrnamentUploadButton = document.querySelector('.create-ornament-upload-button');
        const createOrnamentImage = document.querySelector('.create-ornament-image');
        const selectedImage = document.querySelector('#selected-image');

        createOrnamentUploadButton.addEventListener('click', () => {
            createOrnamentImage.click();
        });

        createOrnamentImage.addEventListener('change', () => {
            const file = createOrnamentImage.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    selectedImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>