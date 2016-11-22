<?php 

$max = 7;
$page = 1;

if (isset($_GET['page'])) {
	$page = $_GET['page'];
}


$a = range(1,100);

$start = ($page - 1)*$max;

$current_pages = array_slice($a, $start, $max);

foreach ($current_pages as $item) {
	echo $item;
}

$max_page = ceil(count($a)/$max);

var_export($max_page);

 ?>

