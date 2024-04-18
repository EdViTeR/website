<?php
    session_start();
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 2) {
        header("Location: /");
    }
?>
<html lang="en">
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
        <li class="nav-item"><a href="../admin/admin.php" class="nav-link active">Главная</a></li>
        <li class="nav-item"><a href="../admin/users.php" class="nav-link">Пользователи</a></li>
        <li class="nav-item"><a href="../admin/users.php" class="nav-link">Заказы</a></li>
        <li class="nav-item"><a href="../admin/logout.php" class="nav-link">Выход</a></li>
    </ul>
</header>

<?php include('../assets/footer.php'); ?>
</body>
</html>