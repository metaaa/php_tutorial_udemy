<?php

//inside the parentheses there are: initiator; condition; increment
for ($i=1; $i <= 10; $i++) { 
	echo $i . "<br>";
}

$totaItems = 210;
$itemsPerPage = 25;
echo "<br>";
$pageCount = $totaItems / $itemsPerPage;
echo $pageCount . "<br>";
echo ceil($pageCount) . "<br>"; //ceil() function rounds up the nuber
echo floor($pageCount) . "<br>"; //rounds down the number
if ($pageCount > 1) {
	for ($i = 1; $i < $pageCount; $i++) { //sample for pagination
		echo '<a href="?page=' . $i . '">' . $i . '</a> ';
	}
}
//looping through an array
echo "<br><br>";
$names = ["alex", "billy", "dale"];
for ($i = 0; $i < count($names); $i++) { 
	echo $names[$i] . "<br>";
}


?>