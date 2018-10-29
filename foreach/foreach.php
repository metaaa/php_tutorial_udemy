<?php
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

foreach ($topics as $topic) { //each member of the topics array will be stored in topic variable
	echo '<h1>' . $topic['title'], "</h1>"; // print out the topics' title
	foreach ($topic['posts'] as $post) { //each member of the topics array's posts array (associative array) will be stored in the post variable
		echo '<p>' . $post['body'] . '</p>'; //print out the posts
	}
}

?>