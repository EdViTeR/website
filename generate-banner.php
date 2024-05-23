<?php

class Banner
{
	public function render()
	{
?>
		<div class="inner-block">
			<div class="left-block">
				<p>Сгенерируйте собственное уникальное изображение</p>
				<form action="upload.php" method="post" enctype="multipart/form-data">
				  	<input type="file" name="image"><br><br>
					<button type="submit" class="generate-button">ЗАГРУЗИТЬ</button>
				</form>
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
