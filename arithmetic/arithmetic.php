<?php

$views = 0;

//incrementing
$views = $views + 5.5;
echo $views . "</br>";
$views++;
echo $views . "</br>";
$views += 3;
echo $views . "</br>";
//decrementing > works the same way
$views -= 3;
echo $views . "</br>";

$totalLessons = 30;
$completedLessons = 7;

$percentage = ($completedLessons / $totalLessons) * 100;
$percentage = number_format($percentage); //converts the format of the output > trims the decimal places
echo "you have completed " . $percentage . "% of this course</br>";
$percentage = number_format(($completedLessons / $totalLessons) * 100); //converts the format of the output > trims the decimal places
echo "you have completed " . $percentage . "% of this course</br>";
$percentage = number_format($percentage, 2); //converts the format of the output > keeps only 2 decimal places
echo "you have completed " . $percentage . "% of this course</br>";


$balance = 500;
$cost = 25;
echo $balance = $balance - $cost . "</br>";
//modulus
$a = 10;
$b = 8;
echo $a % $b . "</br>";
//using incrementation in loops
echo "// using incrementation in loops</br>";
$rows = 10;
for ($row = 1; $row <= $rows; $row++){
	if ($row % 2 == 0){
		echo $row . " - even</br>";
	} else {
		echo $row . " - odd</br>";
	}
}
//exponentiation operator
$numb = 10;
echo $numb ** 2 . "</br>";
?>