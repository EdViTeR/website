<?php
include "database/database.php";
if (isset($_SESSION['search_ornaments']) && !empty($_SESSION['search_ornaments'])) {
	$ornament  = $_SESSION['search_ornaments'];
} else {
	$ornament = all_ornament($dbo);
}
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
		<h1 class="collections-main-title">Коллекция орнаментов</h1>
		<form method="POST" class="search" action="search_author.php">
			<div class="search-bar">
				<label for="search-input" class="form-label"></label>
				<input class="search-input" type="text" name="author" placeholder="Поиск по авторам" enctype="multipart/form-data">
				<a href="search_clear.php" class="search-clear" type="button" onclick="clearInput()"><img src="assets/img/clear.svg" alt="clear" width="20" height="20"></a>
			</div>
			<button class="search-submit" type="submit" name="submit">
				<img src="assets/img/search-icon.svg" width="30" height="30" alt="Поиск...">
			</button>
		</form>
	</div>
	<?php if (isset($ornament) && !empty($ornament)) : ?>
		<div class="collections">
			<?php foreach ($ornament as $key => $value) : ?>
				<?php
				$date = strstr($value['time'], ' ', true);
				$user_name = user_name_ornament($dbo, $value['user_id']);
				?>
				<?php if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 2) : ?>
					<div class="collection">
						<a href="/cabinet/ornament.php?id=<?php echo $value['id']; ?>" class="collection-img-container">
							<img class="collection-img" src="<?php echo $value['way']; ?>" alt="<?php echo $value['name']; ?>">
						</a>
						<div class="collection-title-container">
							<h2 class="collection-title"><?php echo $value['name']; ?></h2>
							<div class="collection-rating">
								<span class="collection-rating-value"><?php echo $value['rating']; ?></span>
								<div class="collection-my-rating">
									<div class="collection-my-rating-icon">
										<img src="../assets/img/star-checked.svg" width="25" height alt="Star Icon">
									</div>
								</div>
							</div>
						</div>
						<div class="collection-materials-container">
							<p class="collection-materials"><?php echo $value['materials']; ?></p>
							<?php if ($_SESSION['user']['id'] != $value['user_id']) : ?>
								<div class="collection-my-rating-container">
									<button class="collection-like">Нравится</button>
								</div>
							<?php endif; ?>
						</div>
						<p class="collection-name"><?php echo $user_name["name"]; ?></p>
						<p class="collection-name"><?php echo $date; ?></p>
						<div class="collection-border"></div>
					</div>
				<?php else : ?>
					<div class="collection">
						<a href="/cabinet/ornament.php?id=<?php echo $value['id']; ?>" class="collection-img-container">
							<img class="collection-img" src="<?php echo $value['way']; ?>" alt="<?php echo $value['name']; ?>">
						</a>
						<div class="collection-title-container">
							<h2 class="collection-title"><?php echo $value['name']; ?></h2>
							<div class="collection-rating">
								<span class="collection-rating-value"><?php echo $value['rating']; ?></span>
								<img class="collection-rating-icon" width="24" src="../assets/img/star-checked.svg" alt="Звезда">
							</div>
						</div>
						<p class="collection-materials"><?php echo $value['materials']; ?></p>
						<p class="collection-name"><?php echo $user_name["name"]; ?></p>
						<p class="collection-name"><?php echo $date; ?></p>
						<div class="collection-border"></div>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
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

	<script src="assets/star-rating.js"></script>
	<script src="assets/script.js"></script>
	<script>
		function clearInput() {
			document.querySelector('.search-input').value = '';
		}
	</script>

</body>

</html>