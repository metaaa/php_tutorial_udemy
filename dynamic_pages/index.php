<!DOCTYPE html>
<html>
	<head>
		<title>Webpage</title>
	</head>
	<body>
		<div id="header"><h1>Welcome on the webpage</h1></div>
		<div id="menu"></div>
			<a href="index.php">Home</a>
			<a href="index.php?page=news">News</a>
			<a href="index.php?page=aboutus">About Us</a>
			<a href="index.php?page=contact">Contact</a>
		<div id="content">
			<?php
				$pages_dir = 'pages';
				if (!empty($_GET['page'])){
					$pages = scandir($pages_dir, 0);
					unset($pages[0], $pages[1]);
					$page = $_GET['page'];
					if (in_array($page.'.inc.php', $pages)) {
						include ($pages_dir.'/'.$page.'.inc.php');
					} else {
						echo 'Sorry, page not found...';
					}
				} else {
					include ($pages_dir.'/home.inc.php');
				}
			?>
		</div>
	</body>
</html>
