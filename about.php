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
	<link rel="stylesheet" href="assets/index.css">
	<link rel="stylesheet" href="assets/about.css">
	<link type="image/x-icon" href="assets/img/favicon.ico" rel="shortcut icon">
</head>

<body>
	<?php
	require_once 'header.php';
	$header = new Header();
	$header->render();
	?>

	<div class="container">
		<div class="about-block">
			<div class="about-block-title">
				<p>О проекте</p>
			</div>
			<div class="about-block-img">
				<img src="/assets/img/img.png" alt="Your Image">
			</div>
		</div>



		<div class="content-grid">
			<div class="content-block">
				<div class="content-title">ОБЗОР КОМПАНИИ</div>
			</div>
			<div class="content-block">
				<div class="content-text">Научная школа компьютерного проектирования орнамента — современная платформа для обучения, предлагающая широкую коллекцию произведений искусства, а именно — орнаментальные композиции.</div>
			</div>
			<div class="content-block">
				<div class="content-text-bold">Наша фишка —</div>
				<div class="content-text">
					обучение у гениев цифрового орнамента, генерация уникальных изображений, в основе которых лежат наши программы, сотрудничество с лидирующим ВУЗом страны. Наша команда тщательно оценивает работы студентов.
				</div>
			</div>
			<div class="content-block">
				<div class="content-picture"></div>
			</div>
			<div class="content-block">
				<div class="content-picture"></div>
			</div>
			<div class="content-block">
				<div class="content-picture"></div>
			</div>
			<div class="content-block">
				<div class="content-picture"></div>
			</div>
			<div class="content-block">
				<div class="content-text-bold">
					Концепция школы —
				</div>
				<div class="content-text">
					создание, ведение и продвижение образовательных проектов и существующих культурных ценностей, которые вдохновляют людей и наполняют их жизнь и мир красотой и смыслом.
					Школа им. Н.П. Бесчастного —
					великая память уникальных знаний </div>
			</div>
			<div class="content-wide-block">
				<div class="content-text">
					У нас можно ознакомиться с огромным цифровым архивом гениев текстильного орнамента, изучить научные работы и сгенерировать собственное оригинальное изображение в известных всему миру стилях.
				</div>
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