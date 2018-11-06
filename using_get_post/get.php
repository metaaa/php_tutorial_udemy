<?php


if (isset($_GET['search'])) {
	$searchTerm = $_GET['search'];
	echo '<h3>Searching for: ' . $searchTerm . '</h3>';
}