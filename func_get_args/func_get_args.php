<?php

function add($num1, $num2, $num3){
	return $num1 + $num2 + $num3;
}
echo add(5, 10, 10). "<br>";

// using an array for the add function - recommended solution, because it's more readable
function addArray(array $numbers){
	$total = 0;
	foreach ($numbers as $number){
		$total += $number;
	}
	return $total;
}

$numbers = [5, 10, 15];
echo addArray($numbers) . "<br>";
//func_get_args
function add2(){
	$total = 0;
	foreach (func_get_args() as $number) {
		if (!is_numeric($number)){
			continue;
		} 
		$total += $number;
	}
	return $total;
}

echo add2(1, 2, 4) . "<br>";
//array_sum

echo array_sum([3, 6, 9]). "<br>";

function sumOfArray(){
	return array_sum(func_get_args());
}

echo sumOfArray(2, 6, 7);

?>