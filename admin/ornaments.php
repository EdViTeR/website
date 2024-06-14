<?php
    session_start();
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 5) {
        header("Location: /");
    }
    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once $root . '/database/connect.php';
    require_once $root . '/database/database.php';

    $ornaments = all_ornament($dbo);
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="admin.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Панель администратора</span>
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="../admin/admin.php" class="nav-link">Главная</a></li>
        <li class="nav-item"><a href="../admin/users.php" class="nav-link">Пользователи</a></li>
        <li class="nav-item"><a href="../admin/ornaments.php" class="nav-link active">Орнаменты</a></li>
        <li class="nav-item"><a href="../logout.php" class="nav-link">Выход</a></li>
    </ul>
</header>
<div class="container">
    <h3 class="text-center">Орнаменты</h3><hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
                <th scope="col">Автор</th>
                <th scope="col">Рейтинг</th>
                <th scope="col">Время</th>
                <th scope="col">Орнамент</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>
    <?php
        $k = 0;
        foreach ($ornaments as $key => $value) {
            $name = $value['name'];
            $id = $value['id'];
            $user_id = $value['user_id'];
            $username = user_name_ornament($dbo, $user_id);
            $k++;
            echo '<tr>
                    <th scope="row">'. $k . '</th>
                    <td>'. $name . '</td>
                    <td>'. $username['name'] . '</td>
                    <td>'. $value['rating'] . '</td>
                    <td>'. $value['time'] . '</td>
                    <td><img class="collection-img" src="' . $value['way'] . '" alt="' . $value['name'] . '" width="100" height="100"></td>
                    <td><a href=delete_ornament.php?id=' . $id  . '>Удалить орнамент</a></td>
                </tr>';
        }
    ?>
        </tbody>
    </table></br>
</div>
</body>
</html>