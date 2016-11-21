
<?

$max = 5;
$page = 8;

if (isset($_GET['page'])) {
	$page = $_GET['page'];
}


$a = range(1,50);

$start = ($page - 1)*$max;

$current_pages = array_slice($a, $start, $max);


foreach ($current_pages as $item) {
	echo $item;
}

 ?>

<ul class="pagination">
	<li><a href="#">&laquo;</a></li>
	<li><?php require 'paginator_logic.php'; ?></li>
	<li><a href="#">&raquo;</a></li>
</ul>
