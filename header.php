<?php
class Header
{
	public function render()
	{
?>
		<header class="header">
			<div class="logo">
				<a href="/"><img src="/assets/img/logo.png"></a>
			</div>
			<div class="nav-toggle">
				<img src="/assets/img/icon.png" alt="Меню" onclick="toggleMenu()">
			</div>
			<nav class="nav">
				<ul>
					<?php 
					if (isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id'])) {
						echo '<li><a href="/cabinet/user.php">ГЛАВНАЯ</a></li>
								<li><a href="/school.php">ШКОЛА</a></li>
								<li><a href="/collections.php">КОЛЛЕКЦИИ</a></li>
								<li><a href="/about.php">О ПРОЕКТЕ</a></li>
								<li><a href="../logout.php">ВЫЙТИ</a></li>
							</ul>
						</nav>
						<div class="dropdown-menu">
							<ul>
								<li><a href="/cabinet/user.php">ГЛАВНАЯ</a></li>
								<li><a href="/school.php">ШКОЛА</a></li>
								<li><a href="/collections.php">КОЛЛЕКЦИИ</a></li>
								<li><a href="/about.php">О ПРОЕКТЕ</a></li>
								<li><a href="../logout.php">ВЫЙТИ</a></li>
							</ul>
						</div>';
					} else {
						echo '<li><a href="/school.php">ШКОЛА</a></li>
								<li><a href="/collections.php">КОЛЛЕКЦИИ</a></li>
								<li><a href="/about.php">О ПРОЕКТЕ</a></li>
								<li><a href="/cabinet/sign_in.php">КАБИНЕТ</a></li>
							</ul>
						</nav>
						<div class="dropdown-menu">
							<ul>
								<li><a href="/school.php">ШКОЛА</a></li>
								<li><a href="/collections.php">КОЛЛЕКЦИИ</a></li>
								<li><a href="/about.php">О ПРОЕКТЕ</a></li>
								<li><a href="/cabinet/sign_in.php">КАБИНЕТ</a></li>
							</ul>
						</div>';	
					}?>
		</header>
<?php
	}
}
?>
<link rel="stylesheet" href="/assets/header.css">
<script src="../assets/script.js"></script>