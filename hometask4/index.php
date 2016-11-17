<!-- <pre>

<?php 


$data = unserialize(file_get_contents('database'));
$posts = array();

if ($data) {
	$posts = $data;
}

var_export($posts);


if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$content = $_POST['content'];
	$title = $_POST['title'];
	$posts[] = array('title' => $title, 'content' => $content);
	
	$result = serialize($posts);
	file_put_contents('database', $result);
	//header('Location: /');
}

	 ?>

 <form action="" method="POST">
 	<input type="text" name="title" id="">
 	<input type="text" name="content" id="">
 	<input type="submit" value="Send message">
 </form>
</pre> -->


<?php require 'header.php'; ?>