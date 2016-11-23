<?php 

$action = "Create";
require 'init.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$content = isset($_POST['content']) ? $content = $_POST['content'] : null;
	$title = isset($_POST['title']) ? $title = $_POST['title'] : null;
	$posts[] = [
		'title' => $title,
		'content' => $content
		];
	
	$result = serialize($posts);
	file_put_contents('database', $result);
	header('Location: ../hometask4/index.php');
}

$contentval = $titleval = null;

require 'header.php';
require 'new_post_form.php';
require 'footer.php';






 ?>