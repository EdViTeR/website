<?php
require_once 'footer.php'
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Научная школа</title>
	<link rel="stylesheet" href="assets/index.css">
	<link rel="stylesheet" href="assets/globals.css">
	<link type="image/x-icon" href="assets/img/favicon.ico" rel="shortcut icon">
</head>

<body>
	<?php
	require_once 'header.php';
	$header = new Header();
	$header->render();
	?>
	<div class="content">
		<!-- Здесь находится ваш текущий контент -->
		<div class="video-overlay">
			<div class="scene">
				<div class="backdrop"></div>
				<div class="noise"></div>
				<div class="dots"></div>
				<div class="canvas"></div>
			</div>
			<!-- Здесь будет видео -->
			<!-- <iframe width="464" height="500" src="https://www.youtube.com/embed/j6TwwXvwsKg?si=YG46TDxis9xbb_tP" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
			<!-- <iframe width="416" height="466" src="https://www.youtube.com/embed/A7Od1umtdYs?si=rizJGWeSY5hdZQC1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay=1; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
		</div>
	</div>
	<div class="section">
		<div class="inner-block">
			<div class="left-block">
				<p>Сгенерируйте собственное уникальное изображение</p>
				<a href="cabinet/sign_in.php" class="generate-button">ЗАГРУЗИТЬ</a>
			</div>
			<div class="right-block">
				<img src="assets/img/img.png" alt="Your Image" width="575" height="500">
			</div>
		</div>
		<div class="split-block">
			<div class="left-half">
				<div class="left-half-main">
					Новости
				</div>
				<div class="left-half-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
				</div>
			</div>
			<div class="right-half">
				<img src="assets/img/news.png" alt="Фотография" width="672" height="400">
			</div>
		</div>
		<div class="centered-block">
			<div class="top-border"></div>
			<p>ЦИТАТА Н. П. БЕСЧАСТНОГО LOREM IPSUM DOLOR SIII</p>
			<div class="bottom-border"></div>
		</div>
	</div>

	<div class="carousel-block">
		<h2>Рейтинг орнаментов</h2>
		<div class="carousel">
			<div class="carousel-item">
				<div class="item-content">
					<p>Фамилия Имя Отчество</p>
					<img src="assets/img/news.png" alt="Изображение">
				</div>
			</div>
			<div class="carousel-item">
				<div class="item-content">
					<p>Фамилия Имя Отчество</p>
					<img src="assets/img/news.png" alt="Изображение">
				</div>
			</div>
			<div class="carousel-item">
				<div class="item-content">
					<p>Фамилия Имя Отчество</p>
					<img src="assets/img/news.png" alt="Изображение">
				</div>
			</div>
			<!-- Дополнительные подблоки карусели -->
		</div>

		<div class="carousel-controls">
			<button class="carousel-control-prev"><img src="assets/img/prev-arrow.svg" alt="Prev"></button>
			<button class="carousel-control-next"><img src="assets/img/next-arrow.svg" alt="Next"></button>
		</div>
	</div>

	<?php
	require_once 'footer.php';
	$footer = new Footer();
	$footer->render();
	?>

	<script src="assets/script.js"></script>
</body>

</html>