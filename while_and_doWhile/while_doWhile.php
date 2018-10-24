<?php
//with the while loop we have more control inside the block; however its less used
$currentNumber = 1;
$endAt = 10;
$incBy = 1;

while ($currentNumber <= $endAt) { //inside the parentheses there is the expression
	echo $currentNumber . "<br>";
	$currentNumber += $incBy;
}

$numberIwant = 3;
echo rand(1, 10) . "<br>"; // generates a random number

while (($diceRoll = rand(1, 6)) != $numberIwant){
	echo "You have rolled a {$diceRoll}, we need a {$numberIwant}<br>";
}
echo "you rolled a {$numberIwant}!<br><br>";

//doWhile loop
do { //first it does the block, then it checks for the condition, thus it will run at elast one
	echo "this will be run at least once";
} while (false);

?>