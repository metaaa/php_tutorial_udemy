<?php
if(isset($_POST['name'], $_POST['age'])){ //checking if the fields has input value or not
	$name = htmlentities($_POST['name'], ENT_QUOTES, 'UTF-8'); //store the value of name field in the $name variable. using htmlentities will prevent scripts to be interpreted
	$age = (int)$_POST['age']; //store the value of age field in the $age variable. casting the value to be int. this will also prevent scripts to be interpreted, because int will be the only appceptable input type

	echo "You are {$name} - {$age} years old."; //print out the values 
}
?>

<form action="using_get.php" method="POST">
	<input type="text" name="name" placeholder="Name">
	<input type="text" name="age" placeholder="Age">
	<input type="submit">
</form>
