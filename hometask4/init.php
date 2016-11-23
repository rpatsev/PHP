<?php 

$data = unserialize(file_get_contents('database'));
$posts = array();


if ($data) {
	$posts = $data;
}
 ?>