<?php 

require 'init.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
} else {
	header('Location: ../hometask4/index.php');
	exit();
}

$action = "Update";


$titleval = $posts[$id]['title'];
$contentval = $posts[$id]['content'];





if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$content = isset($_POST['content']) ? $content = $_POST['content'] : null;
	$title = isset($_POST['title']) ? $title = $_POST['title'] : null;
	$posts[] = array('title' => $title, 'content' => $content);
	
	$result = serialize($posts);
	file_put_contents('database', $result);
	header('Location: ../hometask4/index.php');
}


require 'header.php';
require 'new_post_form.php';
require 'footer.php';




 ?>