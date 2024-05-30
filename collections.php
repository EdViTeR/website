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
		<h1 class="collections-main-title">Коллекция орнаментов</h1>
		<form class="search" action="">
			<div class="search-bar">
				<input class="search-input" type="text" placeholder="Поиск по авторам">
				<!-- <button class="search-open"><img src="assets/img/arrowdown.svg" alt=""></button> -->
			</div>
			<button class="search-submit" type="submit">
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
								<div class="collection-my-rating-container">
									<label class="collection-my-rating-label">Оценка: </label>
									<div class="collection-my-rating-stars">
										<div class="collection-my-rating-icon" data-rating="1">
											<img src="../assets/img/star.svg" width="25" height="25" alt="Star Icon">
										</div>
										<div class="collection-my-rating-icon" data-rating="2">
											<img src="../assets/img/star.svg" width="25" height="25" alt="Star Icon">
										</div>
										<div class="collection-my-rating-icon" data-rating="3">
											<img src="../assets/img/star.svg" width="25" height="25" alt="Star Icon">
										</div>
										<div class="collection-my-rating-icon" data-rating="4">
											<img src="../assets/img/star.svg" width="25" height="25" alt="Star Icon">
										</div>
										<div class="collection-my-rating-icon" data-rating="5">
											<img src="../assets/img/star.svg" width="25" height="25" alt="Star Icon">
										</div>
									</div>
								</div>
							</div>
							<p class="collection-name"><?php echo $user_name["name"]; ?></p>
							<p class="collection-name"><?php echo $date; ?></p>
							<div class="collection-border">
							</div>
						</div>
					</div>

				<?php else : ?>
					<div class="collection">
						<img class="collection-img" src="<?php echo $value['way']; ?>" alt="<?php echo $value['name']; ?>">
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
						<div class="collection-border">
						</div>
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
</body>

</html>