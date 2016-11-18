<?php 

$data = unserialize(file_get_contents('database'));
$posts = array();
$hlocation = " ../hometask4/index.php";

if ($data) {
	$posts = $data;
}


 ?>


