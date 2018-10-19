<?php

//null happens when a variable is signed value 0 or unset, hasn't been set
//it's useful when using comparisons
$name = null; //set initial value 
var_dump($name); //print out the type
echo '</br>';
$name = 'alex'; // modify the variable
var_dump($name); //print out the type - it has been changed
echo '</br>';
unset($name); //unset will reset the value to null -doesn't matter how many times it has been changed
var_dump($name); //print out type
?>