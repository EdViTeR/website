<?php
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
    <link rel="stylesheet" href="../assets/collections.css">
    <link rel="stylesheet" href="../assets/ornament.css">
    <link type="image/x-icon" href="assets/img/favicon.ico" rel="shortcut icon">
</head>

<body>
    <?php
    require_once '../header.php';
    $header = new Header();
    $header->render();
    ?>

    <div class="container">
        <h1 class="collections-main-title">Орнамент <?php echo $ornament['name'] ?></h1>
        <div class="ornament">
            <?php
            $date = strstr($ornament['time'], ' ', true);
            $user_name = user_name_ornament($dbo, $ornament['user_id']);
            echo '<div class="collection">
                            <div class="collection">
                                <img class="collection-img" src="' . $ornament['way'] . '" alt="' . $ornament['name'] . '">
                                <div class="collection-title-container">
                                    <h2 class="collection-title">' . $ornament['name'] . '</h2>
                                    <div class="collection-rating">
                                        <span class="collection-rating-value">' . $ornament['rating'] . '</span>
                                        <img class="collection-rating-icon" width="24" src="../assets/img/star.svg" alt="Звезда">
                                    </div>
                                </div>
                                <p class="collection-materials">' . $ornament['materials'] . '</p>
                                <p class="collection-name">' . $user_name["name"] . '</p>
                                <p class="collection-name">' . $date . '</p>
                                <div class="collection-border">
                                </div>
                            </div>';
            if ($ornament['user_id'] == $_SESSION['user']['id']) {
                echo '<a href="delete_ornament.php?id=' . $ornament['id'] . '" class="collection-delete">Удалить орнамент</a>';
            }
            echo '</div>
            <div  class="ornament-reviews">
            <h2>Отзывы преподавателя</h2>';
            $review = ornament_review($dbo, $ornament['id']);
            if (!$review) {
                echo '<p>Пока что отзывов нет</p>';
            }
            foreach ($review as $key => $value) {
                $user = user_name_ornament($dbo, $value['head_id']);
                $username = $user['name'];
                $date = strstr($value['time'], ' ', true);

                echo '<div class="review">
                        <div class="review-header">
                            <p class="review-name">' . $username . '</p>
                            <p class="review-date">' . $date . '</p>
                        </div>
                        <p class="review-text">' . $value['text'] . '</p>
                    </div>';
            }

            if ($_SESSION['user']['role'] == 2) {
                echo '<form class="review-form" action="create_review.php?id=' . $ornament['id'] . '" method="post" enctype="multipart/form-data">
                        <label class="review-label" for="text">Оставить отзыв</label>
                        <textarea maxlength="200" class="review-input" id="reviewTextarea" type="text" name="text" required placeholder="Напишите отзыв"></textarea>
                        <span id="charCount">Осталось знаков: 200</span>
                        <input class="review-submit" type="submit" value="Отправить" />
                    </form>';
            }
            echo '</div>';

            ?>
        </div>
    </div>

    <?php
    require_once '../footer.php';
    $footer = new Footer();
    $footer->render();
    ?>

    <script>
        const textarea = document.getElementById("reviewTextarea");
        const charCount = document.getElementById('charCount');

        textarea.addEventListener("input", function() {
            this.style.height = "auto";
            this.style.height = this.scrollHeight + "px";
        });

        textarea.addEventListener('input', () => {
            const remainingChars = textarea.maxLength - textarea.value.length;
            charCount.textContent = `Осталось знаков: ${remainingChars}`;
        });
    </script>
</body>

</html>