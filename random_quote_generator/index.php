<?php

$quotes = [
	[
		"author" => "first",
		"text" => "never give up",
	],
	[
		"author" => "second",
		"text" => "there's always a second chance",
	],
	[
		"author" => "third",
		"text" => "at first sight",
	],
	[
		"author" => "fourth",
		"text" => "just do it",
	],
	[
		"author" => "fifth",
		"text" => "make it stronger, do it better",
	],
];
//shorter method
$quote = $quotes[array_rand($quotes)];
$quoteText = $quote['text'];
$quoteAuthor = $quote['author'];

/*
//longer method
//generate a random number between 0 and the count of the array-1
$quote = $quotes[rand(0, count($quotes) - 1)];
$quoteText = $quote['text'];
$quoteAuthor = $quote['author'];
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Random Quote</title>
</head>
<body>
	<blockquote>
		<h2>&ldquo;<?php echo $quoteText?>&ldquo;</h2>
		<strong>- <?php echo $quoteAuthor?></strong>
	</blockquote>
</body>
</html>