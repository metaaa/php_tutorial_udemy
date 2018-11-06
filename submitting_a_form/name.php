<?php

$name = $_POST['name'] ?? null;


if (empty(trim($name))) {
	header('Location: index.php');
}

echo "Hi there, {$_POST['name']}!";
