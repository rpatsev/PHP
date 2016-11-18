<?php 

if(isset($_GET['id'])){
	$id = $_GET['id'];
} else {
	header('Location: ../hometask4/index.php');
	exit();
}


require 'init.php';
require 'header.php';

if(isset($posts[$id])){
	unset($posts[$id]);
	$data = serialize($posts);
	file_put_contents('database', $data);
	header('Location: ../hometask4/index.php');
} else {
	header('Location: ../hometask4/index.php');
}


require 'post_item.php';
require 'footer.php';

 ?>