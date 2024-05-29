<?php

class Collections
{
	public $collections = [];

	public function __construct()
	{
		$this->collections[] = [
			'id' => 1,
			'title' => 'Название картины 1',
			'materials' => 'Дерево, Кирпич',
			'picture' => '../assets/img/collection-pic-placeholder.png',
		];

		$this->collections[] = [
			'id' => 2,
			'title' => 'Название картины 2',
			'materials' => 'Дерево, Кал',
			'picture' => '../assets/img/collection-pic-placeholder.png',
		];

		$this->collections[] = [
			'id' => 3,
			'title' => 'Название картины 3',
			'materials' => 'Гуашь, акварель',
			'picture' => '../assets/img/collection-pic-placeholder.png',
		];

		$this->collections[] = [
			'id' => 4,
			'title' => 'Название картины 4',
			'materials' => 'Цитата, акварель',
			'picture' => '../assets/img/collection-pic-placeholder.png',
		];
	}

	public function render()
	{
?>
		<div class="collections">
			<?php
			foreach ($this->collections as $collection) {
			?>
				<div class="collection">
					<img class="collection-img" src="<?= $collection['picture'] ?>" alt="<?= $collection['title'] ?>">
					<div class="collection-title-container">
						<h2 class="collection-title"><?= $collection['title'] ?></h2>
						<!-- <div class="collection-rating">
							<span class="collection-rating-value">3</span>
							<img class="collection-rating-icon" width="24" src="../assets/img/star.svg" alt="Звезда">
						</div> -->
					</div>
					<p class="collection-materials"><?= $collection['materials'] ?></p>
					<p class="collection-name">ДОЛБАЕБ ДОЛБАЕБОВИЧ</p>
					<div class="collection-border">
					</div>
				</div>
			<?php
			}
			?>
		</div>
<?php
	}
}
?>
<link rel="stylesheet" href="/assets/collections.css">