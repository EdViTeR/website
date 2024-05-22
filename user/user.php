<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: /");
    }
	echo 'Личный кабинет';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link type="image/x-icon" href="../assets/img/favicon.ico" rel="shortcut icon">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="/"><img src="../assets/img/logo.png"></a>
        </div>
        <div class="nav-toggle">
            <img src="assets/img/icon.png" alt="Меню" onclick="toggleMenu()">
        </div>
        <nav class="nav">
            <ul>
                <li><a href="school.php">ШКОЛА</a></li>
                <li><a href="#">СТАТЬИ</a></li>
                <li><a href="#">КОЛЛЕКЦИИ</a></li>
                <li><a href="#">О ПРОЕКТЕ</a></li>
                <li><a href="../logout.php">ВЫЙТИ</a></li>
            </ul>
        </nav>
        <div class="dropdown-menu">
            <ul>
                <li><a href="#">ШКОЛА</a></li>
                <li><a href="#">СТАТЬИ</a></li>
                <li><a href="#">КОЛЛЕКЦИИ</a></li>
                <li><a href="#">О ПРОЕКТЕ</a></li>
                <li><a href="#">КАБИНЕТ</a></li>
            </ul>
        </div>
    </header>
    <a href="../logout.php" class="" type="submit">Выход</a>

<?php include('../assets/footer.php'); ?>
</body>
</html>