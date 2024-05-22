<?php
class Footer
{
	public function render()
	{
?>
		<footer>
			<div class="flex-container">
				<div class="col">
					<div class="contacts">
						<div class="group">
							<h2>8 (495) 999-09-09</h2>
							<p>Контактный центр</p>
						</div>
						<div class="group">
							<h2>8 (495) 999-09-09</h2>
							<p>Контактный центр</p>
						</div>
					</div>
					<div class="group">
						<h2>Есть вопрос или предложение?</h2>
						<p>Напишите (ссылка) — ответственному за ...</p>
					</div>
				</div>

				<div class="col">
					<div class="group">
						<h2>г. Москва, ул. Малая Калужская, д. 1, каб. 22</h2>
						<p><a href="mailto:school@mail.ru">school@mail.ru</a></p>
					</div>
					<p>Мы используем файлы cookie, для персонализации сервисов и повышения удобства пользования сайтом. Если вы не согласны на их использование, поменяйте настройки браузера.</p>
				</div>
			</div>
			<div class="social-group">
				<a href="https://youtube.com"><img src="/assets/img/youtube.svg" alt="Youtube"></a>
				<a href="https://vk.com"><img src="/assets/img/vk.svg" alt="VK"></a>
			</div>

		</footer>
<?php
	}
}
?>
<link rel="stylesheet" href="/assets/footer.css">