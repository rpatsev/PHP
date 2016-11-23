<?php 
session_start();
/*	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$login = $_POST['Login'];
		$pwd = $_POST['Password'];
		if ($login) {
			$_SESSION['Login'] = $login;		
		} else {
			$_SESSION['Login'] = null;	
		if ($pwd) {
			$_SESSION['Password'] = $pwd;
		} else {
			$_SESSION['Password'] = null;
		}
		header('Location: ../hometask4/index.php');
	}
*/

/*	if (isset($_SESSION['Login'])){
		$user = $_SESSION['Login'];
	} else {
		$user = "Guest";
	}*/


	$users = [];
	$data = file_get_contents('users');
	$data_unserialized = unserialize($data);
	if ($data_unserialized) {
		$users = $data_unserialized;
	}
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$username = $_POST['Login'];
		//xampp only
		//$pwd = password_hash($_POST['Password'],1);
		$pwd = $_POST['Password'];
		$users[] = [
			'username' => $username,
			'password' => $pwd
		];
		file_put_contents('users', serialize($users));
		header('Location: ../hometask4/index.php');
		exit();
	}

var_export($users);
$action2 = "Register";

require 'header.php';
require 'autorization.php';

require 'footer.php';

?>