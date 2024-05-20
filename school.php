<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наши руководители</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="/"><img src="assets/img/logo.png"></a>
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
                <li><a href="cabinet/sign_in.php">КАБИНЕТ</a></li>
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
    <div class="content-school">
        <h1>Наши руководители</h1>
        <div class="leader">
            <img src="assets/img/photo_1.png" alt="Н.П. Бесчастнов" class="leader-photo">
            <div class="leader-info">
                <h2>Н.П. Бесчастнов</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Перейти в профиль</a>
            </div>
        </div>
        <div class="leader">
            <div class="leader-info">
                <h2>А.Н. Новиков</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#">Перейти к цитатам Н. П. Бесчастного</a>
            </div>
            <img src="assets/img/photo_2.png" alt="А.Н. Новиков" class="leader-photo">
        </div>
    </div>
            <div class="centered-block">
            <div class="top-border"></div>
            <p>ЦИТАТА Н. П. БЕСЧАСТНОГО LOREM IPSUM DOLOR SIII</p>
            <div class="bottom-border"></div>
        </div>
    <footer>
        <div>
            <p>8 (495) 999-09-99</p>
            <p>Контактный центр</p>
        </div>
        <div>
            <p>8 (495) 999-09-99</p>
            <p>Контактный центр</p>
        </div>
        <div>
            <p>г. Москва, ул. Малая Калужская, д. 1, каб. 22</p>
            <p>school@mail.ru</p>
        </div>
        <div>
            <p>Есть вопрос или предложение?</p>
            <p>Напишите (ссылка) — ответственному за ...</p>
        </div>
        <div>
            <p>Мы используем файлы cookie, для персонализации сервисов и повышения удобства пользования сайтом. Если вы не согласны на их использование, поменяйте настройки браузера.</p>
        </div>
        <div>
            <a href="#"><img src="youtube.png" alt="YouTube"></a>
            <a href="#"><img src="vk.png" alt="VK"></a>
        </div>
    </footer>
    <script src="assets/script.js"></script>
</body>
</html>
