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
        <?php
        if (isset($ornament) && ! empty($ornament)) {
        	echo '<div class="collections">';
            foreach ($ornament as $key => $value) {
            	$date = strstr($value['time'], ' ', true);
            	$user_name = user_name_ornament($dbo, $value['user_id']);
            	if (isset($_SESSION['user']) && $_SESSION['user']['role'] == 2) {
	                echo '<a href="/cabinet/ornament.php?id=' . $value['id'] . '">
	                	<div class="collection">
	                        <div class="collection">
		                        <img class="collection-img" src="' . $value['way'] . '" alt="' . $value['name'] . '">
		                        <div class="collection-title-container">
		                            <h2 class="collection-title">' . $value['name'] . '</h2>
		                            <div class="collection-rating">
		                                <span class="collection-rating-value">' . $value['rating'] . '</span>
		                                <img class="collection-rating-icon" width="24" src="../assets/img/star.svg" alt="Звезда">
		                            </div>
		                        </div>
		                        <p class="collection-materials">' . $value['materials'] . '</p>
		                        <p class="collection-name">' . $user_name["name"] . '</p>
		                        <p class="collection-name">' . $date . '</p>
		                        <div class="collection-border">
		                        </div>
		                    </div>
	                    </div></a>';
            	} else {
	                echo '<div class="collection">
	                        <img class="collection-img" src="' . $value['way'] . '" alt="' . $value['name'] . '">
	                        <div class="collection-title-container">
	                            <h2 class="collection-title">' . $value['name'] . '</h2>
	                            <div class="collection-rating">
	                                <span class="collection-rating-value">' . $value['rating'] . '</span>
	                                <img class="collection-rating-icon" width="24" src="../assets/img/star.svg" alt="Звезда">
	                            </div>
	                        </div>
	                        <p class="collection-materials">' . $value['materials'] . '</p>
	                        <p class="collection-name">' . $user_name["name"] . '</p>
	                        <p class="collection-name">' . $date . '</p>
	                        <div class="collection-border">
	                        </div>
	                    </div>';
	            }
            }
        }
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