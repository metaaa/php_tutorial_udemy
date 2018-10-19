<?php
$weather = 'cloudy';
$degrees = 13;
//string concatenation using dots
$status = 'The current weather is '.$weather.' and it\'s '.$degrees.' degrees'; 
//simply concatenate things and variables
echo $status;
echo '</br>';

//variable parsing
$status = "The current weather is $weather and it's $degrees degrees"; //using double quotes means variable parsing
echo $status;
echo '</br>';
$status = "The current weather is {$weather} and it's {$degrees}° degrees"; //curly brcaes will indicate where the variable starts and where it ends. for example this way you can add degree symbol next to the variable
echo $status;
echo '</br>';
//string concatenation using commas - works only with echo - don't use it unless it's necessary
$name = 'metaaa'; 
echo 'my name is ', $name;
?>