<?php

function fullName($firstName, $lastName = null, $separator = "_"){
	if (trim($firstName) === ''){
		return;
	} elseif ($lastName === null){
		return "{$firstName}";
	} else {
		return "{$firstName}{$separator}{$lastName}";
	}
}
echo fullName("metaaa") . "<br>";
echo fullName("metaaa", "vagyok") . "<br>";
var_dump(fullName("                "));

?>