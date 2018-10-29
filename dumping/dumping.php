<?php

$names = ['alex' => 27, 'billy' => 23];

var_dump($names);
echo '<br>';

$users = [
	['name' => 'alex', 'age' => 27],
	['name' => 'billy', 'age' => 23],
];

echo '<pre>', var_dump($users), '</pre>';
echo '<br>';
print_r($users);
echo '<br>';
echo '<pre>', print_r($users), '</pre>';
?>