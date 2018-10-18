<?php
//simple array
echo "<u>simple array</u></br></br>"; //simple echo
$names = ["alex", "billy"]; //declaration of the array with 2 elements
$names[] = "dale"; //adding an element to the end of the array
var_dump($names); //print out the types
//associative array
echo "</br></br><u>associative array</u></br></br>";//simple echo
$people = [ //declaration of the array
	'alex' => 26, //declaration of the key and value - this way alex will be the index
	'billy' => 21,
];
var_dump($people); //print out the types
//multi-dimensional array
echo "</br></br><u>multi-dimensional array</u></br></br>";//simple echo
$users = [ //declaration of a multi-dimensional array (an array inside array)
	[
		'username' => 'alex',
		'email' => 'alex@email.com'
	],
	[
		'username' => 'billy',
		'email' => 'billy@email.com'
	]
];
echo "</br></br>";
echo '<pre>', var_dump($users), '</pre>'; //print out the array's structure and values
echo("</br>");
echo $users[1][email]; //print out the second users email address



?>