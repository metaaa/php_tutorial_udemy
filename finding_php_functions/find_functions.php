<?php
$name = "           metaaa        .    a";
echo strlen($name), "<br>"; //determines the length of the string
echo strtoupper($name), "<br>"; //converts the letters to uppercase
echo trim($name), "<br>";// trims the whitespaces
$name = "...........metaaa......";
echo trim($name, '.'), "<br>";//trims the dots
$name = "            metaaa";
echo ltrim($name), "<br>";//trims from the left

$name = "billyke";

echo substr($name, 0, 2), "<br>"; // trims the first 2 char of the text
echo substr($name, 0, ceil(strlen($name) / 2)), "<br>";//gets only the first half of the text

$page = $_GET['page'] ?? 1;

if (empty(trim($page))) {
		$page = 1;
}
echo $page, "<br>";

$number = 512312312214.123215124;
echo number_format($number, 2), "<br>"; // shows the number with 2 decimal places and comma separated
echo number_format($number, 2, '.', '-'), "<br>"; //shows the number with 2 decimal places and dashes instead of commas
