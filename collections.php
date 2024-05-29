<?php
include "database/database.php";
$ornament = all_ornament($dbo);

?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Коллекции</title>
	<link rel="stylesheet" href="assets/globals.css">
	<link rel="stylesheet" href="assets/collections.css">
	<link type="image/x-icon" href="assets/img/favicon.ico" rel="shortcut icon">
</head>

<body>
	<?php
	require_once 'header.php';
	$header = new Header();
	$header->render();
	?>

	<div class="container">
		<form class="search" action="">
			<div class="search-bar">
				<input class="search-input" type="text" placeholder="Поиск по коллекциям">
				<button class="search-open"><img src="assets/img/arrowdown.svg" alt=""></button>
			</div>
			<button class="search-submit" type="submit">
				<img src="assets/img/search-icon.svg" width="30" height="30" alt="Поиск...">
			</button>
		</form>

		<h1 class="collections-main-title">Орнамент</h1>

		<?php
		require_once 'utils/collections-parse.php';
		$collections = new Collections();
		$collections->render();
		?>
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