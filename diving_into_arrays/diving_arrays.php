<?php
//simple array
echo '<u>simple array</u></br></br>'; //simple echo
$names = ['alex', 'billy']; //declaration of the array with 2 elements
$names[] = 'dale'; //adding an element to the end of the array
var_dump($names); //print out the types
//associative array
echo '</br></br><u>associative array</u></br></br>';//simple echo
$people = [ //declaration of the array
	'alex' => 26, //declaration of the key and value - this way alex will be the index
	'billy' => 21,
];
var_dump($people); //print out the types
//multi-dimensional array
echo '</br></br><u>multi-dimensional array</u></br></br>';//simple echo
$users = [ //declaration of a multi-dimensional array (arrays inside an array)
	[
		'username' => 'alex',
		'email' => 'alex@email.com',
		'likes' => ['cats', 'food']
	],
	[
		'username' => 'billy',
		'email' => 'billy@email.com',
		'likes' => ['books', 'cats']
	]
];
echo '</br></br>';
echo '<pre>', var_dump($users), '</pre>'; //print out the array's structure and values
echo '</br>';
echo $users[1][email].'</br>'; //print out the second user's email address
echo $users[0][likes][0].'</br>'; //print out the first user's first like

echo '</br><u>printing out the multi multi-dimensional array</u></br></br>';

foreach ($users as $user) {
	var_dump($user);
	echo '</br>';
}
echo '</br></br>';
foreach ($users as $user) {
	echo $user['username'].'</br>';
}

$users[] = [ //adding an additional user
		'username' => 'josh',
		'email' => 'josh@email.com',
		'likes' => ['dogs', 'food']
	];
echo '<pre>', var_dump($users), '</pre>'; //print out the array's structure and values
//modify values
$users[2]['likes'][1] = 'books';
echo '<pre>', var_dump($users), '</pre>'; //print out the array's structure and values

?>