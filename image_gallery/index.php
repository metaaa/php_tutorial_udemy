<?php
/*
//reading files from folder
$directory = opendir('images'); //opens the folder 
while ($imageFile = readdir($directory)) { //list the files of the directory
	var_dump($imageFile);
}*/

require 'directoryreader.php';

$images = directoryreader('images');

if (!$images) {
	die("Couldn't load files");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Gallery</title>
	</head>
	<body>
		<?php foreach ($images as $image): ?>
			<img src="<?php echo $image; ?>" width="300px" height="auto">
		<?php endforeach; ?>
	</body>
</html>