<?php

//logical oprators
$var1 = 10 < 5;
$var2 = 11 - 6 == 5;
if ($var1 && $var2) { //&& = and
	echo 'both are true';
} elseif ($var1 || $var2) { // || = or
	echo 'partially true';
}
echo '</br>';
//not operator
$dayOfWeek = 7;
$workingTheWeekend = true;
if (($dayOfWeek == 6 || $dayOfWeek == 7) && !$workingTheWeekend) { //using double parentheses can determine the priority 
	echo "it's a day off! ;)";
} else {
	echo "you are busted..";
}

?>