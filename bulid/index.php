﻿<?php
session_start();
?>
<!DOCTYPE html lang="cs">
<?php
include 'scripts/join.php';
?>
<html lang="cs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="manifest" href="manifest.json">
	<link rel="icon" href="/img/logo/logo.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="css/desktopStyle.css" media="screen and (min-width: 1024px)"/>
	<link rel="stylesheet" href="css/mobileStyle.css" media="screen and (max-width: 1023px)"/>
	<title>Document</title>
</head>

<body>
	<link rel="apple-touch-icon" sizes="180x180" href="/img/logo/logo-180.png">
	<nav>
		<div id="navContent">
			<input type="checkbox" id="checkbox_toggle">
			<label for="checkbox_toggle" class="btn-primary toggle">&#9776; Menu</label>		
			<ul id="links">
				<li><a href="index.php?page=home">Domů</a></li>
				<li>
					<a href="#">Předměty</a>
					<ul class="submenu">
						<li><a href="#">Grafika</a></li>
						<li><a href="#">Programování</a></li>
						<li><a href="#">PVY</a></li>
						<li><a href="#">Sítě</a></li>
					</ul>
				</li>
				<li><a href="#">O nás</a></li>
				<li><a href="#">Kalendář</a></li>
			</ul>
			<ul>
				<div style="display: flex;" class="btn-primary">
					<?php
						if (!isset($_SESSION["username"])) {
							echo '<a href="index.php?page=login">Přihlásit se</a>';
						} else {
							echo '<a href="index.php?page=logout">Odhlásit se</a>';
						}
					?>
				</div>
			</ul>
		</div>
	</nav>
	<header>
	</header>
	<?php
	if (isset($_GET['page'])) {
		$main = $_GET['page'];
	} else {
		$main = "home";
	}
	switch ($main) {
		case "home":
			include "pages/home.php";
			break;
		case "predmety":
			include "pages/predmety.php";
			break;
		case "onas":
			include "pages/onas.php";
			break;
		case "login":
				include "pages/login.php";
				break;  
        case "register":
				include "pages/register.php";
				break;
		case "logout":
				include "scripts/logout.php";
				break;    
		default:
			include "pages/home.php";
			break;
	}

	?>


		<?php
		include "scripts/chat.php";
		include "scripts/footer.php";
		?>
</body>

</html>