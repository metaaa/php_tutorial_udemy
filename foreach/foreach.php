<?php
//foreach loop
$names = ['alex', 'billy', 'dale'];
//simple for
for ($i = 0; $i < count($names); $i++) { 
	echo $names[$i] . "<br>";
}
//basic foreach
foreach ($names as $name) {
	echo $name . "<br>";
}
//foreach for associative or multiple arrays
foreach ($names as $index => $name) {
	echo $index . ": " . $name . "<br>";
}
//------------working with a complex array -----------
$topics = [
	[
		'id' => 1,
		'title' => 'The best way to learn PHP.',
		'posts' => [
			['body' => 'Practice a lot!'],
			['body' => 'Work on a project']

		]
	],
	[
		'id' => 2,
		'title' => 'How do I use a foreach loop?',
		'posts' => [
			['body' => 'Just watch this part!']

		]
	],
];

foreach ($topics as $topic) {
	echo '<h1>' . $topic['title'], "</h1>";
	foreach ($topic['posts'] as $post) {
		echo '<p>' . $post['body'] . '</p>';
	}
}

?>