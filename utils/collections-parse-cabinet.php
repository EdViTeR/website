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
						<div class="collection-rating">
							<span class="collection-rating-value">3</span>
							<img class="collection-rating-icon" width="24" src="../assets/img/star.svg" alt="Звезда">
						</div>
					</div>
					<p class="collection-materials"><?= $collection['materials'] ?></p>
					<p class="collection-name">ДОЛБАЕБ ДОЛБАЕБОВИЧ</p>

					<h3 style="margin-top: 30px;">Отзывы руководителя</h3>
					<div class="collection-feedback">
						<div class="collection-feedback-item">
							<div class="collection-feedback-item-title">
								<div class="collection-feedback-item-name">Препод Преподович</div>
								<div class="collection-feedback-item-date">10.10.2025</div>
							</div>
							<div class="collection-feedback-item-text">Все хуйня, переделывай</div>
						</div>
						<div class="collection-feedback-item">
							<div class="collection-feedback-item-title">
								<div class="collection-feedback-item-name">Препод Преподович</div>
								<div class="collection-feedback-item-date">11.10.2025</div>
							</div>
							<div class="collection-feedback-item-text">Все норм харош</div>
						</div>

						<h3>Добавить комментарий</h3>
						<form class="collection-feedback-form">
							<div class="collection-feedback-form-rating">
								<label for="">Оценка: </label>
								<input type="number" name="rating" id="" min="1" max="5">
								<img class="collection-rating-icon" width="24" src="../assets/img/star.svg" alt="Звезда">
							</div>
							<textarea type="text" placeholder="Ваш комментарий"></textarea>
							<button type="submit">Отправить</button>
						</form>
					</div>

					<div class="collection-border">
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