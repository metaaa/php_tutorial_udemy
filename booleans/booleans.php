<?php
$fileIsUploaded = true; //setting default value

if ($fileIsUploaded) { //checking the condition - it will be true
		echo "file is already uploaded...</br></br>"; //print out if it's true
}

$isItInt = is_int(5); //it will investigate that the given input is an integer or not and will return a true/false

if ($isItInt) { //checking the condition - it will be true
	echo "It is an integer!"; //echoing out this text
	var_dump($isItInt); //prints out the variable's type
} else { //in any other cases
	echo " Not an integer..."; //echoing out this text
	var_dump($isItInt); //prints out the variable's type
}

?>