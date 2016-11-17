
<?php 
require 'header.php';

$data = unserialize(file_get_contents('database'));
$posts = array();

if ($data) {
	$posts = $data;
}

var_export($posts);


if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$content = isset($_POST['content']) ? $content = $_POST['content'] : null;
	$title = isset($_POST['title']) ? $title = $_POST['title'] : null;
	$posts[] = array('title' => $title, 'content' => $content);
	
	$result = serialize($posts);
	file_put_contents('database', $result);
	//header('Location: /');
}

	 ?>

