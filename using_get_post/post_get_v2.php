<?php

var_dump($_GET); 
echo "<br>" . $_GET["category"];
//pagination
$page = $_GET["page"];
$searchTerm = $_GET["search"];
$pages = 10;

echo "<h3>Searching for: " . $searchTerm . "</h3>";
echo "<p>You are on page " . $page . "<br>";

for ($i=0; $i <= $pages ; $i++) { 
	echo '<a href="?search=' . $searchTerm . '&page=' . $i . '">' . $i . '</a>  ';
}