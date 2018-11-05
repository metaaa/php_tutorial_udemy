<?php

$config = [
	"seperator" => "_",
];

$config2 = [
	"seperator" => "_",
];

function fullName($firstName, $lastName){//the function has it's own scope, thus we cannot reach the config variable (it's not global)
	global $config; //thisis why we make config to a global variable
	return "{$firstName}{$config['seperator']}{$lastName}";
}

echo fullName("metaaa", "vagyok");
echo "<br>";// SOMETHING IS WRONG FROM HERE
///using the use  config
$fullName2 = function fullName2($firstName, $lastName) use ($config2) {//this invokes the variable and makes it reachable from the functions scope
	return "{$firstName}{$config2['seperator']}{$lastName}";
};
echo $fullName2("metaaa", "vagyok");
?>