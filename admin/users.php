<?php
    session_start();
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 5) {
        header("Location: /");
    }
    $root = $_SERVER['DOCUMENT_ROOT'];
    require_once $root . '/database/connect.php';
    require_once $root . '/database/database.php';

    $users = all_user($dbo, 1);
    $teacher = all_teacher($dbo, 2);
    $admin = all_admin($dbo, 5);
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
        <li class="nav-item"><a href="../admin/users.php" class="nav-link active">Пользователи</a></li>
        <li class="nav-item"><a href="../admin/ornaments.php" class="nav-link">Орнаменты</a></li>
        <li class="nav-item"><a href="../admin/logout.php" class="nav-link">Выход</a></li>
    </ul>
</header>
<div class="container">
    <h3 class="text-center">Администраторы</h3><hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Почта</th>
                <th scope="col">Действие</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>
    <?php
        $k = 0;
        foreach ($admin as $key => $value) {
            $name = $value['name'];
            $email = $value['email'];
            $id = $value['id'];
            $k++;
            echo '<tr>
                    <th scope="row">'. $k . '</th>
                    <td>'. $name . '</td>
                    <td>'. $email . '</td>
                    <td><a href=delete_admin.php?id=' . $id . '>Убрать из администраторов</a></td>
                    <td><a href=delete_user.php?id=' . $id  . '>Удалить аккаунт</a></td>
                </tr>';
        }
    ?>
        </tbody>
    </table></br>
    <h3 class="text-center">Руководители</h3><hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Почта</th>
                <th scope="col">Изменить пароль</th>
                <th scope="col">Назначить администратором</th>
                <th scope="col">Убрать из руководителей</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>
    <?php
        $k = 0;
        foreach ($teacher as $key => $value) {
            $name = $value['name'];
            $email = $value['email'];
            $id = $value['id'];
            $k++;
            echo '<tr>
                    <th scope="row">'. $k . '</th>
                    <td>'. $name . '</td>
                    <td>'. $email . '</td>
                    <form action="change_password.php?id=' . $id . '" method="POST">
                        <td><input type="password" id="password" name="password" required></td>
                    </form>
                    <td><a href=add_admin.php?id=' . $id . '>Назначить администратором</a></td>
                    <td><a href=delete_admin.php?id=' . $id . '>Убрать из руководителей</a></td>
                    <td><a href=delete_user.php?id=' . $id  . '>Удалить аккаунт</a></td>
                </tr>';
        }
    ?>
        </tbody>
    </table></br>
    <h3 class="text-center">Пользователи</h3><hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Почта</th>
                <th scope="col">Изменить пароль</th>
                <th scope="col">Назначить руководителем</th>
                <th scope="col">Действие</th>
            </tr>
        </thead>
        <tbody>
    <?php
        $k = 0;
        foreach ($users as $key => $value) {
            $name = $value['name'];
            $email = $value['email'];
            $id = $value['id'];
            $k++;
            echo '<tr>
                    <th scope="row">'. $k . '</th>
                    <td>'. $name . '</td>
                    <td>'. $email . '</td>
                    <form action="change_password.php?id=' . $id . '" method="POST">
                        <td><input type="password" id="password" name="password" required></td>
                    </form>
                    <td><a href=add_teacher.php?id=' . $id  . '>Назначить руководителем</a></td>
                    <td><a href=delete_user.php?id=' . $id  . '>Удалить аккаунт</a></td>
                </tr>';
        }
    ?>
        </tbody>
    </table></br>
</div>
</body>
</html>