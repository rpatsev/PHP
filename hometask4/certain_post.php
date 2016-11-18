<?php 

if(isset($_GET['id'])){
	$id = $_GET['id'];
} else {
	header('Location: ../hometask4/index.php');
	exit();
}


require 'init.php';
require 'header.php';

if(!isset($posts[$id])){
	header('Location: ../hometask4/index.php');
} else {
	$post = $posts[$id];
	
}


require 'post_item.php';
require 'footer.php';

 ?>