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
                            </div>
                        </div>';
            $review = ornament_review($dbo, $ornament['id']);
            foreach ($review as $key => $value) {
                $user = user_name_ornament($dbo, $value['head_id']);
                $username = $user['name'];

                echo $value['text'] . $username . '</br>';
            }
            if ($ornament['user_id'] == $_SESSION['user']['id']) {
                echo '<a href="delete_ornament.php?id=' . $ornament['id'] . '" class="collection-name">Удалить орнамент</a>';
            }
            if ($_SESSION['user']['role'] == 2) {
                echo '<form action="create_review.php?id=' . $ornament['id'] . '" method="post" enctype="multipart/form-data">
                        <label for="text">Оставить отзыв</label>
                        <input id="text" type="text" name="text" />
                        <input type="submit" value="Отправить" />
                    </form>';
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