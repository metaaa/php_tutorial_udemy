<?php

$dayOfWeek = 7;
if ($dayOfWeek == 1) { //simple if statement with a single comparison
	echo "it is monday";
} elseif ($dayOfWeek == 2) {
	echo "it is tuesday";
} elseif ($dayOfWeek == 3) {
	echo "it is wednesday";
} else {
	echo "that is not a valid day";
}

echo "</br>";
$daysOfWeek = [
	1 => "Monday",
	2 => "Tuesday",
	3 => "Wednesday"
];

if (in_array($dayOfWeek, array_keys($daysOfWeek))){
	echo $daysOfWeek[$dayOfWeek];
} else {
	echo "that is not a valid day";
}
//if nesting
$name = "Alex Strapadopoupolou";

echo "</br>";
if ($name) {
	echo "Your name is ".$name;
	if (strlen($name) > 10) {
		echo "</br>you have a long name</br>";
	}
}

//inversion operator
if (!$name){
	return; // if name is null it will broke the coed and nothing else will be run
}
echo "your name is " . $name;
if (strlen($name) > 10){
	echo "</br>you have along name...</br>"
}


?>