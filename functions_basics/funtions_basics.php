<?php

function fullName($firstName, $lastName){
	return "{$firstName} {$lastName}";
}

$first = "metaaa";

echo fullName($first, "vagyok"); //invoke the function
//optional argument
echo "<br>";
function fullName2($firstName, $lastName, $separator = ' '){
	return "{$firstName}{$separator}{$lastName}";
}

echo fullName2("metaaa", "vagyok") . "<br>";
echo fullName2("metaaa", "vagyok", "_") . "<br>";
//use as an variable - pay attention to the iteration order!!!
$fullName3 = function($firstName, $lastName, $separator = '-'){
	return "{$firstName}{$separator}{$lastName}";
};

echo $fullName3("megint", "metaaa");
?>