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
		<h1 class="collections-main-title">Орнамент</h1>
		<div class="collections">
			<?php
			foreach ($this->collections as $collection) {
			?>
				<div class="collection">
					<img class="collection-img" src="<?= $collection['picture'] ?>" alt="<?= $collection['title'] ?>">
					<h2 class="collection-title"><?= $collection['title'] ?></h2>
					<p class="collection-materials"><?= $collection['materials'] ?></p>
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