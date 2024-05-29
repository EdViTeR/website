<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>О проекте</title>
	<link rel="stylesheet" href="assets/globals.css">
	<link rel="stylesheet" href="assets/about.css">
	<link type="image/x-icon" href="assets/img/favicon.ico" rel="shortcut icon">
</head>

<body>
	<?php
	require_once 'header.php';
	$header = new Header();
	$header->render();
	?>


	<div class="about-cards">
		<div class="about-card about-card_1">
			<h1 class="about-card-title">
				О проекте
			</h1>
			<img class="about-card-img" src="/assets/img/img.png" alt="img">
		</div>
		<div class="about-card about-card_2">
			<h1 class="about-card-title">
				Наши достижения
			</h1>
			<div class="about-card-achievements">
				<div class="about-card-achievement">
					<h2>ТОП 100</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
				<div class="about-card-achievement">
					<h2>1 место</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
				<div class="about-card-achievement">
					<h2>3 место</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container about-container">
		<div class="about-header">
			<h1>Научная школа компьютерного проектирования орнамента им Н.П. Бесчастного</h1>
			<p>Современная платформа для разработки орнамента, предлагающая широкую коллекцию произведений искусства , а именно - орнаментальные композиции.</p>
		</div>
		<div class="about-grid">
			<div class="about-group">
				<img src="/assets/img/about-icons/box1.svg" alt="">
				<p>Наша концепция - создавать и продвигать образовательные проекты и существующие культурные ценности, которые вдохновляют людей и наполняют их жизнь красотой и смыслом. </p>
			</div>
			<div class="about-group">
				<img src="/assets/img/about-icons/box2.svg" alt="">
				<p>Наша фишка - сотрудничество с авторами коллекций, генерация подлинных изображений на основе наших программ, сотрудничество с лидирующим ВУЗом страны.</p>
			</div>
			<div class="about-group">
				<img src="/assets/img/about-icons/cpu.svg" alt="">
				<p>У нас можно ознакомиться с огромным цифровым архивом гениев текстильного орнамента, изучить научные работы и сгенерировать собственное оригинальное изображение в известных всему миру стилях.</p>
			</div>
			<div class="about-group">
				<img src="/assets/img/about-icons/cardano.svg" alt="">
				<p>Мы тщательно подбираем узоры художников для посетителей нашего сайта, дабы оптимизировать поиск качественного образца для различных целей.</p>
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