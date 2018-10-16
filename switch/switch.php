<?php
$name = 'Frank'; //value
echo ('the name is: '.$name.'<br>'); // prints out the value
switch ($name) {
	case $name == 'Sarah': //statement
		echo 'it\'s Sarah'; // prints out text
		break;
	case $name == 'Jack': //statement
		echo 'it\'s Jack'; //prints out text
		break;
	default: //it's like else
		echo 'it\'s nobody'; // will print out this if any of the upper comparisons get true
		break;
}
?>