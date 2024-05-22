<?php

class Banner
{
	public function render()
	{
?>
		<div class="inner-block">
			<div class="left-block">
				<p>Сгенерируйте собственное уникальное изображение</p>
				<a href="cabinet/sign_in.php" class="generate-button">ЗАГРУЗИТЬ</a>
			</div>
			<div class="right-block">
				<img src="/assets/img/img.png" alt="Your Image" width="575" height="500">
			</div>
		</div>
<?php
	}
}
?>
<link rel="stylesheet" href="/assets/index.css">