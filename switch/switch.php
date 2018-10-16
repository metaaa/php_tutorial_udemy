<?php
$name = 'Frank'; 						//declaration of the variable
echo ('the name is: '.$name.'<br>'); 	//prints out the variable
switch ($name) {						//the investigated variable
	case $name == 'Sarah':				//condition
		echo 'it\'s Sarah'; 				//if true, it will print out the text
		break; 								//breaks the investigation - no further comparisons will be made
	case $name == 'Jack': 				//condition
		echo 'it\'s Jack'; 					//if true, it will print out the text
		break;								//breaks the investigation - no further comparisons will be made
	default: 							//in any other case do this
		echo 'it\'s nobody'; 			//it will print out the text if all of the upper comparisons get false
		break;
}
?>