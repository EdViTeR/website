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
        <h1 class="collections-main-title">Орнамент <?= htmlspecialchars($ornament['name']) ?></h1>
        <div class="ornament">
            <?php
            $date = strstr($ornament['time'], ' ', true);
            $user_name = user_name_ornament($dbo, $ornament['user_id']);
            ?>
            <div class="collection">
                <div class="collection">
                    <img class="collection-img" src="<?= htmlspecialchars($ornament['way']) ?>" alt="<?= htmlspecialchars($ornament['name']) ?>">
                    <div class="collection-title-container">
                        <h2 class="collection-title"><?= htmlspecialchars($ornament['name']) ?></h2>
                        <a href="add_rating.php?id=<?= $_GET['id'] ?>">
                            <div class="collection-rating">
                                <span class="collection-rating-value"><?= htmlspecialchars($ornament['rating']) ?></span>
                                <img class="collection-rating-icon" width="24" src="../assets/img/star-checked.svg" alt="Звезда">
                            </div>
                        </a>
                    </div>
                    <div class="collection-materials-container">
                        <p class="collection-materials"><?php echo $ornament['materials']; ?></p>
                        <?php if ($_SESSION['user']['id'] != $ornament['user_id']) : ?>
                            <div class="collection-my-rating-container">
                                <button class="collection-like">Нравится</button>
                            </div>
                        <?php endif; ?>
                    </div>
                    <p class="collection-name"><?= htmlspecialchars($user_name["name"]) ?></p>
                    <p class="collection-name"><?= htmlspecialchars($date) ?></p>
                    <div class="collection-border"></div>
                </div>
                <?php if ($ornament['user_id'] == $_SESSION['user']['id']) : ?>
                    <a href="delete_ornament.php?id=<?= htmlspecialchars($ornament['id']) ?>" class="collection-delete">Удалить орнамент</a>
                <?php endif; ?>
            </div>
            <div class="ornament-reviews">
                <h2>Отзывы преподавателя</h2>
                <?php
                $review = ornament_review($dbo, $ornament['id']);
                if (!$review) {
                    echo '<p>Пока отзывов нет</p>';
                } else {
                    foreach ($review as $value) {
                        $user = user_name_ornament($dbo, $value['head_id']);
                        $username = $user['name'];
                        $date = strstr($value['time'], ' ', true);
                ?>
                        <div class="review">
                            <div class="review-header">
                                <p class="review-name"><?= htmlspecialchars($username) ?></p>
                                <p class="review-date"><?= htmlspecialchars($date) ?></p>
                            </div>
                            <p class="review-text"><?= htmlspecialchars($value['text']) ?></p>
                        </div>
                    <?php
                    }
                }
                if ($_SESSION['user']['role'] == 2) : ?>
                    <form class="review-form" action="create_review.php?id=<?= htmlspecialchars($ornament['id']) ?>" method="post" enctype="multipart/form-data">
                        <label class="review-label" for="text">Оставить отзыв</label>
                        <textarea maxlength="200" class="review-input" id="reviewTextarea" type="text" name="text" required placeholder="Напишите отзыв"></textarea>
                        <span id="charCount">Осталось знаков: 200</span>
                        <input class="review-submit" type="submit" value="Отправить" />
                    </form>
                <?php endif; ?>
            </div>
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
    <script src="../assets/star-rating.js"></script>
    <script src="../assets/script.js"></script>

</body>

</html>