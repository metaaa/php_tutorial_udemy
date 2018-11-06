<?php

echo $_GET['page'] . "<br>";

$page = 1;
if (isset($_GET['page'])) {
	$page = $_GET['page'];
}
echo $page .  "<br>";
//ternary operator
//it's an inline if statement like variable = condition ? value if true : value if false
$page = isset($_GET['page']) ? $_GET['page'] : 1;
echo $page . "<br>";
//simplier solution
//the sample below meanst that if the paage is set store it'S value in the var, otherwise set it to 1
$page = $_GET['page'] ?? 1;
echo $page . "<br>";

//example
$balance = 0;
$availableBalance = $balance ?: 'zero'; // if this is zero or false, we use zero
if ($balance === 0) {
		$balance = 'zero';
}

echo 'Your available balance is ' . $availableBalance;
?>