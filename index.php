<?php
include "database/database.php";
$ornament = all_ornament($dbo);
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
	<?php
	require_once 'glitter.php';
	$glitter = new Glitter();
	$glitter->render();
	?>
	<div class="section">
		<?php
		require_once 'generate-banner.php';
		$header = new Banner();
		$header->render();
		?>
		<div class="split-block">
			<div class="left-half">
				<div class="left-half-main">
					Новости
				</div>
				<div class="left-half-text">
					<p>рывь лолыь льыле коьлщы ьешлщьоы кшеш оыкьеш ыкьешщ ьыошкщеь шоыкеь шщыкзрьш щзьыкшщьо шыщкзь шощзыкь шеощзьыкшщеьшщцыкьошы кьшеозыькшщоьшщык.</p>
				</div>
			</div>
			<div class="right-half">
				<img src="assets/img/news.png" alt="Фотография" width="672" height="400">
			</div>
		</div>

		<?php
		require_once 'quote.php';
		$quote = new Quote();
		$quote->render();
		?>
	</div>
	<div class="carousel-block">
		<h2>Рейтинг орнаментов</h2>
		<div class="carousel">
			<?php
			foreach ($ornament as $key => $value) {
				$username = user_name_ornament($dbo, $value['user_id']);
				echo '<div class="carousel-item">
							<div class="item-content">
								<div class="item-content-title">
									<p>' . $username['name'] . '</p>
									<div class="item-content-rating">
										<span class="item-content-rating-value">' . $value['rating'] . '</span>
										<img class="item-content-rating-icon" width="24" src="assets/img/star.svg" alt="Звезда">
									</div>
								</div>
								<img src="' . $value['way'] . '" alt="Изображение">
							</div>
						</div>
					';
			}
			?>
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