<?php

function directoryReader ($directory, array $excludeFiles = ['.', '..','.DS_Store']){
	$images = [];
	//loop through the files
	//do some checks
	if (!is_dir($directory)) {
		return null;
	}
	//checks if we van open the dir or not
	if (!($filesDirectory = opendir($directory))) {
		return null;
	}
	//exclude the files mentioned above
	while (($file = readdir($filesDirectory)) !== false){
		//checks if the file is among the excluded ones, then skip them
		if (in_array($file, $excludeFiles)) { 
				continue;
		}
		//extends the files we want
		$files[] = $directory . '/' . $file;
	}
	//close the dir - not compulsory but suggested
	closedir($filesDirectory);

	return $files;
	//add to $images
	//return $images
}

?>