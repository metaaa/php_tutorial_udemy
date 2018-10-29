<?php
//break-------------------------------------------
$names = ['alex', 'billy', 'dale'];
//basic foreach
foreach ($names as $name) {
	echo $name . '<br>';
	break;
}
echo '<br>';
$users = [
	['username' => 'alex'],
	['username' => 'billy'],
	['username' => 'nancy'],
	['username' => 'will'],
	['username' => 'rob'],
	['username' => 'franco'],
	['username' => 'steve'],
];

$toFind = 'rob';
$result = null;

foreach ($users as $user) {
	echo $user['username'] . '<br>';
	if ($user['username'] === $toFind) {
		$result = $user;
		break;
	}
}
echo '<br>';
var_dump($result);
//continue----------------------------------------
$toSkip = 'will';
echo '<br><br>';
foreach ($users as $user) {
	if ($user['username'] === $toSkip) {
		continue; //if the condition is true it will break the iteration and goes to the next iteration, doesn't matter what is below inside this iteration
	}
	echo $user['username'] . '<br>';
}
echo '<br>';

$users = [
	[
		'username' => 'alex',
		'likes' => ['cats', 'food']
	],
	[
		'username' => 'billy',
		'likes' => ['code', 'cats', 'food']
	],
	[
		'username' => 'nancy',
		'likes' => ['code', 'dogs', 'music']
	],
];

$toFind = 'code';
$found = null;

foreach ($users as $user) {
	foreach ($user['likes'] as $like) {
		if ($like === $toFind){
			$found = $user;
			break 2; //we can indicate how many loops (count of nested loops) we can break
		}
	}
}
var_dump($found);
?>